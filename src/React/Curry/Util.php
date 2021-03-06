<?php

namespace React\Curry;

final class Util
{
    public static function bind(/*$fn, $args...*/)
    {
        $args = func_get_args();
        $fn = array_shift($args);

        return call_user_func_array('React\Curry\bind', func_get_args());
    }
}
