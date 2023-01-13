<?php
$arr = ["G" => "GoodBye", 1 => 1000, 3 => 2000, 2 => 3000, "B" => "Apple", "A" => "Banana"];

var_dump(in_array("Good", $arr));
// bool(false)

var_dump(in_array("GoodBye", $arr));
// bool(true)

var_dump(in_array("Goodbye", $arr));
// bool(false)