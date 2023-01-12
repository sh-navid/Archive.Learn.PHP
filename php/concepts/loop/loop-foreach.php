<?php

foreach ([10, 20, 30] as $num) {
    echo $num . "\n";
}

foreach ([10 => "Ten", 20 => "Twenty", 30 => "Thirty"] as $key => $val) {
    echo $key . " - " . $val . "\n";

    if($key==20)
        break;
}
