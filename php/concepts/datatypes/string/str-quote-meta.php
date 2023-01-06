<?php

$str="\Hello\. [4+4*2^3]$ (This is just a sample text ?)";

echo quotemeta($str);
// \\Hello\\\. \[4\+4\*2\^3\]\$ \(This is just a sample text \?\)