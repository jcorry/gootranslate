<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Middleware;

describe('GooTranslate', function(){
    describe('when the constructor is called', function(){
        beforeEach(function(){
            $mock = new Client([
                'headers' => [
                    'content-type' => 'application/json'
                ],
                'base_uri' => 'https://www.googleapis.com/language/translate/v2/',
                'query' => ['key' => env('GOOGLE_API_KEY')]
            ]);

            $this->cut = new \Jcorry\GooTranslate\GooTranslateClass($mock);
        });

        it("should accept a GuzzleHttp\\Client as it's single param", function(){
            expect($this->cut)->to->not->be->null();
        });
    });

    describe('methods', function(){
        describe('languages', function(){
            
        });
        describe('translate', function(){});
        describe('detect', function(){});
    });
});