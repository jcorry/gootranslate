<?php
/**
 * Created by PhpStorm.
 * User: jcorry
 * Date: 3/25/16
 * Time: 2:12 PM
 */
namespace Jcorry\GooTranslate;

use Illuminate\Cache\CacheManager as CacheManager;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;


class GooTranslateMockClass implements GooTranslateServiceContract
{
    /**
     * GooTranslateMockClass constructor.
     */
    public function __construct(\GuzzleHttp\Client $client, CacheManager $cache, $log)
    {
        $translation = new \stdClass();
        $translation->data = new \stdClass();


        $translation = new \stdClass();
        $translation->translateText = 'This is the translated text';

        $translation->data->translations = [
            $translation
        ];

        $mock = new MockHandler([
            new Response(200, ['Content-Length' => 0], json_encode($translation))
        ]);
    }

    /**
     *
     */
    public function languages()
    {
        // TODO: Implement languages() method.
    }

    /**
     * @param $string
     */
    public function translate($string)
    {
        // TODO: Implement translate() method.
    }

    /**
     * @param $string
     */
    public function detect($string)
    {
        // TODO: Implement detect() method.
    }

    /**
     * @param $lang
     * @return $this
     */
    public function src($lang)
    {
        $this->source = $lang;
        return $this;
    }

    /**
     * @param string $lang
     * @return $this
     */
    public function target($lang = 'en')
    {
        $this->target = $lang;

        return $this;
    }

}