<?php

class oClass {
    public static $a = 'prueba';

    public static function f(){
        echo "hola";
    }

}

oClass::$a = 'prueba2';

echo oClass::$a;
