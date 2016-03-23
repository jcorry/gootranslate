<?php
/**
 * Created by PhpStorm.
 * User: jcorry
 * Date: 3/23/16
 * Time: 10:04 AM
 */

namespace jcorry\GooTranslate;


interface GooTranslateServiceContract
{
    public function languages();
    public function translate($string);
    public function detect($string);
}