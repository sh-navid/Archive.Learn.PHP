<?php

$password = "Hello";
$salt1 = 25;
$salt2 = 26;

echo crypt($password, $salt1) . "\n";
// 25Zv/Xpgo16kA

echo crypt($password, $salt2) . "\n";
// 26D8lZEs93.W2

// ---------------------------------------------------------------------
// WARNING: Not sure about using md5, sha1, rot13 for password
// This is just a test
// ---------------------------------------------------------------------

echo md5($password, false) . " - Bin: " . md5($password, true) . "\n";
// 8b1a9953c4611296a827abf8c47804d7 - Bin: ��S�a��'���x�

echo sha1($password, false) . " - Bin: " . sha1($password, true) . "\n";
// f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0 - Bin: ����{���p�Z]x^��Ы�

echo str_rot13($password). "\n";
// Uryyb

// ---------------------------------------------------------------------
// More on salt:
// Why we need salt?
// ---------------------------------------------------------------------
// https://en.wikipedia.org/wiki/Salt_(cryptography)
