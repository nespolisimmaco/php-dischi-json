<?php
$string = file_get_contents("dischi.json");

$albums_array = json_decode($string, true);

$response = [
    "results" => $albums_array
];
header("Content-Type: application/json");
echo json_encode($response);
