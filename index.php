<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

define('MAX', 50);
define('MIN', 1);

$img = rand(MAX, MIN);

for ($i=0; $i <= $img; $i+= 1) { ?>
   <img src="https://img.pixers.pics/pho(s3:700/PI/59/7/700_PI597_cfd93291dc78dea3b667f98e1fd6cb80_5b7ab88adf8e9_.,621,700,jpg)/fototapety-minion.jpg.jpg" alt="mimon" width=90> <?php
}

?>