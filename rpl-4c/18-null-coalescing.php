<?php

// $data = [
//     "name" => "alfin",
//     "age" => 5
// ];
// $data = ["dsa", "asda"];

$data = [
    "name" => "rian",
    "age" => 17,
];

$name = $data["address"] ?? "data tidak ada bos";

echo $name;