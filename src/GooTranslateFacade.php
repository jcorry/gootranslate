<?php
/**
 * Created by PhpStorm.
 * User: Jcorry
 * Date: 3/23/16
 * Time: 10:07 AM
 */
namespace Jcorry\GooTranslate;

use Illuminate\Support\Facades\Facade;

class GooTranslateFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Jcorry\GooTranslate\Translator';
    }

}