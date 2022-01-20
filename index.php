<?php
//запросы к mysql
$connection = new PDO("mysql:host=localhost;dbname=tyres card info;charset=utf8", "root","mysql");

//записть в бд.
$name = 'rosava';
$radius = 'R13';
$wight = '135';
$height = '65';
$price = '35';

$param = [
    'name'=>$name,
    'radius'=>$radius,
    'wight'=>$wight,
    'height'=>$height,
    'price'=>$price
];


$sql = "INSERT tyres (name, radius, wight, height, price) VALUE ( :name, :radius, :wight, :height, :price)";
$query = $connection->prepare($sql);

$query->execute($param);



//$count = $connection->exec($query);
