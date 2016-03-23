<?php

namespace Jcorry\GooTranslate;

use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;

class GooTranslateServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // get the vendor autoload with the dependencies...
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $client = new Client([
            'base_uri' => 'https://www.googleapis.com/language/translate/v2/',
            'query' => ['key' => env('GOOGLE_API_KEY')]
        ]);

        //
        $this->app->singleton('Jcorry\GooTranslate\Translator', function($app) use ($client) {
            return new GooTranslateClass($client);
        });
    }
}