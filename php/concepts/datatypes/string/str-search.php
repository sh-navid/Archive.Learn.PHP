<?php

$str="Hello to my new World";

echo var_dump(strpos($str,"o"))."\n";
// int(4)

echo var_dump(strpos($str,"O"))."\n";
// bool(false)



echo var_dump(stripos($str,"o"))."\n";
// int(4)

echo var_dump(stripos($str,"O"))."\n";
// int(4)



echo var_dump(strrpos($str,"o"))."\n";
// int(17)

echo var_dump(strrpos($str,"O"))."\n";
// bool(false)



echo var_dump(strripos($str,"o"))."\n";
// int(17)

echo var_dump(strripos($str,"O"))."\n";
// int(17)

