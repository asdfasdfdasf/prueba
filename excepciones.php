<?php

try {
    throw new Exception("error");

} catch (ErrorException | Exception $e ){
    echo $e->getMessage();
}
