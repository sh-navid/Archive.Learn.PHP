<?php


$json_string = '{"Title":"Book 01", "Price":1200}';


$json_object = json_decode($json_string);


echo var_dump($json_object);
// object(stdClass)#1 (2) {
//     ["Title"]=>
//     string(7) "Book 01"
//     ["Price"]=>
//     int(1200)
// }


echo $json_object->Title . ' - ' . $json_object->Price . "\n";
// Book 01 - 1200


echo json_encode($json_object) . "\n";
// {"Title":"Book 01","Price":1200}


echo json_encode(["Name" => "Test", "Value" => 12]);
// {"Name":"Test","Value":12}