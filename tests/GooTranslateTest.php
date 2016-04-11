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
<<<<<<< HEAD
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


=======
    /* @test */
    public function it_takes_a_guzzle_client()
    {
        try {
            $client = new Client([
                'base_uri' => 'https://www.googleapis.com/language/translate/v2/',
                'query' => ['key' => env('GOOGLE_API_KEY')],
                'headers' => [
                    'Content-Type' => 'application/json'
                ]
            ]);
        }
        catch (\Exception $e)
        {
            
        }
>>>>>>> 1080f219090ae6df45858198240101ff26c363e7
    }



}