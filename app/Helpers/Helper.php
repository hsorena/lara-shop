<?php

namespace app\Helpers;

class Helper {
    public static function make_slug($string){
        $string = strtolower($string);
        $string = str_replace(['؟', '?'], '', $string);
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
