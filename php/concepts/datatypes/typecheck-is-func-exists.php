<?php

function f(){

}


echo (function_exists("f") ? "True" : "False"), "\n";
// True

echo (function_exists("f1") ? "True" : "False"), "\n";
// False