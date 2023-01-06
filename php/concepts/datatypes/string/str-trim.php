<?php

$str = "     Hello     ";

echo "[" . $str . "]\n";
echo "[" . trim($str) . "]\n";
echo "[" . ltrim($str) . "]\n";
echo "[" . rtrim($str) . "]\n";

// [     Hello     ]
// [Hello]
// [Hello     ]
// [     Hello]