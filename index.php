<?php

require_once("Class/TrafficLight.php");
$state = isset($_GET['state']) ? $_GET['state'] : 0;
$Light = new TrafficLight();
$Light->setState($state);



/*
$Light2 = new TrafficLight();

$Light3 = new TrafficLight();

$lights = [
    $Light,
    $Light2,
    $Light3

];*/


?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title>ExerciseLooper</title>
    <link rel="stylesheet" media="all" href="CSS/Stylesheet.css"/>
</head>
<body>

<div class="Light">

    <div class="<?= $Light->red ? "CircleRed" : "CircleOff" ?>"></div>
    <div class="<?= $Light->yellow ? "CircleYellow" : "CircleOff" ?>"></div>
    <div class="<?= $Light->green ? "CircleGreen" : "CircleOff" ?>"></div>

</div>
<a class="btn" href="index.php?state=<?=$Light->nextState($state)?>">&#xbb;</a>

</body>

