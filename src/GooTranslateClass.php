<?php
namespace jcorry\GooTranslate;

class GooTranslateClass implements GooTranslateServiceContract
{

    private $client;

    public function __construct(\GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;
        $this->setTarget('en');
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
    public function translate($string)
    {
        try {
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

    public function setSrcLanguage($lang)
    {

    }

    public function setTarget($lang = 'en')
    {
        $this->target = $lang;
    }


}
