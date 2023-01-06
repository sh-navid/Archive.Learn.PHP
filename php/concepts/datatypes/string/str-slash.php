<?php

$str="<a href=\"#\" onclick=\"test('')\">Hello</a>";

echo $str."\n";
// <a href="#" onclick="test('')">Hello</a>

echo addslashes($str)."\n";
// <a href=\"#\" onclick=\"test(\'\')\">Hello</a>

echo stripslashes("<a href=\"#\" onclick=\"test(\'\')\">Hello</a>")."\n";
// <a href="#" onclick="test('')">Hello</a>

echo addcslashes($str,"=")."\n";
// <a href\="#" onclick\="test('')">Hello</a>

echo stripcslashes(addcslashes($str,"="))."\n";
// <a href="#" onclick="test('')">Hello</a>