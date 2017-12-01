<?php

class A
{
    public static $nombre = 'A';

    public static function quien()
    {
        echo static::$nombre;
    }

} // class A
