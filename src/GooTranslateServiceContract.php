<?php
/**
 * Created by PhpStorm.
 * User: Jcorry
 * Date: 3/23/16
 * Time: 10:04 AM
 */

namespace Jcorry\GooTranslate;


interface GooTranslateServiceContract
{
    public function languages();
    public function translate($string);
    public function detect($string);
}