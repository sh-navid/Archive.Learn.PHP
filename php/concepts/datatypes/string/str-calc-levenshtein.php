<?php

echo levenshtein("Hello", "Hello")."\n";
//0

echo levenshtein("Hello", "Helloo")."\n";
//1

echo levenshtein("Hello", "Hell0")."\n";
//1

echo levenshtein("Hello", "Hell")."\n";
//1

echo levenshtein("Hello", "Hel")."\n";
//2

echo levenshtein("Hello", "He")."\n";
//3

echo levenshtein("Hello", "olleH")."\n";
//4

echo levenshtein("Hello", "Cake")."\n";
//5

echo levenshtein("Hello", "Cakoo")."\n";
//4


// Levenshtein distance
// is a string metric for measuring the difference between two sequences.
// https://en.wikipedia.org/wiki/Levenshtein_distance