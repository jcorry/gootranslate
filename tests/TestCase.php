<?php
namespace Jcorry\GooTranslate;

class TestCase extends \Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://local.tools.yikyakapi.net';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $unitTesting = true;

        $testEnvironment = 'development';

        $app = require __DIR__.'/../bootstrap/app.php';

<<<<<<< HEAD
        $app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();
=======
        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
>>>>>>> 1080f219090ae6df45858198240101ff26c363e7

        return $app;
    }
}
