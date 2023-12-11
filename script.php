<?php

$globalvar = 10;

function test variable(""){

    $localvar = 20;
    static $staticvar = 30;
    global $globalvar;

    echo "global variable : $globalvar\n";
    echo "local variable : $localvar\n";
    echo "static variable : $staticvar\n";

    if(isset($localvar)){

        echo "localvar is set.\n";
    }
    else{
        echo "localvar is not set.\n";
    }

    unset($staticvar);
    if(isset($staticvar)){
        echo "staticvar is set.\n";
    }
    else{
        echo "staticvar is not set.\n";
    }

}

test variable();

?>