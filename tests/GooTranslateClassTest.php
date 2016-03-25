<?php

namespace Jcorry\GooTranslate;

use Guzzle\Http\ClientInterface;
use Guzzle\Service\Client;
use PHPUnit_Framework_TestCase;

/**
 * @uses \Vendor\Guzzlehttp\ClientInterface
 *
 * @covers \Jcorry\GooTranslate
 */
class GooTranslateClassTest extends PHPUnit_Framework_TestCase

{
    /**
     * @var GooTranslateClass
     */
    private $gooTranslateClass;

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var string
     */
    private $lang;

    public function setup()
    {
        $this->client = new \GuzzleHttp\Client;

        $this->gooTranslateClass = new GooTranslateClass($this->client);

        $this->lang = 'en';
    }

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(GooTranslateClass::class, $this->gooTranslateClass);
    }
}
