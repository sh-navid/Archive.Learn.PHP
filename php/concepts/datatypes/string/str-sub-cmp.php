<?php

echo substr_compare("Hello to my world", "Hello to my world", 0/* Start comparing from 0*/)  . "\n";
// 0

echo substr_compare("Hello", "Hello to my world", 0/* Start comparing from 0*/)  . "\n";
// -12

echo substr_compare("Hello to my world", "Hello", 0/* Start comparing from 0*/)  . "\n";
// 12

echo substr_compare("Hello to my world", "Capital", 0/* Start comparing from 0*/)  . "\n";
// 5