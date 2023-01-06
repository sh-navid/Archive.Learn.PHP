<?php

echo strtok("Hello to my world", "o") . "\n";
// Hell

echo strtok("Hello to my world", " ") . strtok(" ") . strtok(" ") . strtok(" ") . "\n";
// Hellotomyworld
