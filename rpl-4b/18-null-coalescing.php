<?php

$data = [
    "name" => "alfin",
    "age" => 5
];
$name = $data["age"] ?? "data tidak ada bos";

echo $name;