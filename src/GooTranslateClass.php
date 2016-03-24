<?php
namespace Jcorry\GooTranslate;

class GooTranslateClass implements GooTranslateServiceContract
{
<<<<<<< HEAD

    private $client;

    public function __construct(\GuzzleHttp\ClientInterface $client)
=======
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    public function __construct(\GuzzleHttp\Client $client)
>>>>>>> repo-set-up
    {
        $this->client = $client;
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
<<<<<<< HEAD
=======
     * @return string
>>>>>>> repo-set-up
     */
    public function translate($string, $target = null)
    {
        try {
            if($target) {
                $this->target($target);
            }

            $response = $this->client->get('', ['query' => array_merge($this->client->getConfig('query'), ['q' => $string, 'target' => $this->target])]);

            $data = json_decode($response->getBody()->getContents());

            return $data->data->translations;
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
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

    /**
     * @param $string
     * @param $lang
     */
    public function listTranslations($string, $lang)
    {
        $response = $this->service->translations->listTranslations($string, $lang);

        return $response;
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
