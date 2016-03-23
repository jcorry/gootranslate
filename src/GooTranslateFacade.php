<?php
/**
 * Created by PhpStorm.
 * User: jcorry
 * Date: 3/23/16
 * Time: 10:07 AM
 */
namespace jcorry\GooTranslate;

use Illuminate\Support\Facades\Facade;

class GooTranslateFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'jcorry\GooTranslate\Translator';
    }

}