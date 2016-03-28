<?php
namespace Jcorry\GooTranslate;

use Illuminate\Cache\CacheManager as CacheManager;

class GooTranslateClass implements GooTranslateServiceContract
{

    private $client;
    private $cache;

    public function __construct(\GuzzleHttp\Client $client, CacheManager $cache, $log)
    {
        $this->client = $client;
        $this->cache = $cache;
        $this->logger = $log;

        $this->target('en');
    }

    public function languages()
    {
        try {
            $response = $this->client->get('languages', ['query' => array_merge(['target' => 'en'], $this->client->getConfig('query'))]);
            $data = json_decode($response->getBody()->getContents());
            return $data->data->languages;
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    /**
     * @param $string
     */
    public function translate($string, $target = null, $source = null)
    {
        try {
            if($target) {
                $this->target($target);
            }

            $cacheKey = 'Jcorry\GooTranslate\\' . md5($string . $this->target);

            if(! $this->cache->get($cacheKey, false)) {
                // get it from the service and cache it
                $response = $this->client->get('',
                    [
                        'query' => array_merge($this->client->getConfig('query'), ['q' => $string, 'target' => $this->target])
                    ]
                );

                if($response->getStatusCode() == 200) {
                    $data = json_decode($response->getBody()->getContents());
                    $this->cache->forever($cacheKey, $data);
                } else {
                    $this->logger->error('Could not get response from Google Translate :' . $response->getStatusCode());
                    $this->logger->error($response->getBody()->getContents());
                }

                $this->logger->info('looked up ' . $cacheKey . ' from service');
            } else {
                // if it's cached, return it from the cache
                $data = $this->cache->get($cacheKey);
                $this->logger->info('looked up ' . $cacheKey . ' from cache');
            }

            return $data->data->translations;
        }
        catch(\Exception $e)
        {
            // delete the cache
            $this->cache->forget($cacheKey);
            $this->logger->error($e->getMessage());
            return false;
        }
    }

    /**
     * @param $string
     */
    public function detect($string)
    {
        try {
            $response = $this->client->get('detect', ['query' => array_merge($this->client->getConfig('query'), ['q' => $string, 'target' => $this->target])]);

            $data = json_decode($response->getBody()->getContents());

            return $data->data->detections;
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function src($lang)
    {
        $this->source = $lang;

        return $this;
    }

    public function target($lang = 'en')
    {
        $this->target = $lang;

        return $this;
    }


}
