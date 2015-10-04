<?php
$req = $_REQUEST;

ob_start();
print_r($req);
$print = ob_get_clean();
//error_log('$$req = ' . $print, 0, '/tmp/error.log');
//echo $print;
$arr = [
  "items" => [
    ["id" => 0, "name" => "better"] 
    ,["id" => 1, "name" => "letter"] 
    ,["id" => 2, "name" => "setter"] 
  ]
  
];

$toJson = json_encode($arr);

echo $toJson;
//echo "hallo";