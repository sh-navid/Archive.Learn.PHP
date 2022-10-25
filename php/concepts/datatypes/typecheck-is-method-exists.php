<?php


class Shape
{
    public function side($size)
    {
        return $size * $size;
    }

    private function root($size)
    {
        return $size * $size;
    }
}


$obj=new Shape();


echo (method_exists("Shape","side") ? "True" : "False"), "\n";
// True

echo (method_exists("Shape","area") ? "True" : "False"), "\n";
// False

echo (method_exists("Shape","root") ? "True" : "False"), "\n";
// True

echo (method_exists($obj,"root") ? "True" : "False"), "\n";
// True