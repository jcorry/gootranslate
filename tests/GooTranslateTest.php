<?php
/**
 * Created by PhpStorm.
 * User: jcorry
 * Date: 3/28/16
 * Time: 11:26 AM
 */
namespace Jcorry\GooTranslate;

use GuzzleHttp\Client;
use Illuminate\Cache\CacheManager;

class GooTranslateTest extends \TestCase
{
    /** @test */
    public function it_takes_a_guzzle_client()
    {

        $client = new Client([
            'base_uri' => 'https://www.googleapis.com/language/translate/v2/',
            'query' => ['key' => env('GOOGLE_API_KEY')],
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);

        $cacheManager = $this->app->make('cache');
        $log = $this->app->make('log');

        $GooTranslate = new \Jcorry\GooTranslate\GooTranslateMockClass($client, $cacheManager, $log);


    }



}