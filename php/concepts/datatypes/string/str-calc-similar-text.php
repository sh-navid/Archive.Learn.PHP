<?php

echo similar_text("Hello", "Hello") . "\n";
//5

echo similar_text("HEllo", "Hello") . "\n";
//4

echo similar_text("Hoell", "Hello") . "\n";
//4

echo similar_text("Hello", "Goodbye") . "\n";
//1

echo similar_text("How are you", "Goodbye") . "\n";
//2

echo similar_text("How are you", "How are you") . "\n";
//11

echo similar_text("How Are you", "How are you") . "\n";
//10

echo similar_text("are How you", "How are you") . "\n";
//7