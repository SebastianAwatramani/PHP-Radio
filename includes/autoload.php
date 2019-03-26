<?php

function autoLoad($className)
{

include "classes/" . $className . ".class.php";
}

spl_autoload_register("autoload");
