<?php

if (!function_exists('language')) {
    /**
    * Get the language instance.
    *
    * @return \LuizJr\Language\Language
    */
    function language()
    {
        return app('language');
    }
}
