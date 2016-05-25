<?php
$command = $_POST['command'];
$week = $_POST['text'];
$token = $_POST['token'];

function getStartAndEndDate($week, $year)
{

    $time = strtotime("1 January $year", time());
    $day = date('w', $time);
    $time += ((7*$week)+1-$day)*24*3600;
    $return[0] = date('j M Y', $time);
    $time += 6*24*3600;
    $return[1] = date('j M Y', $time);
    return $return;
}

$response = getStartAndEndDate($week, 2016);

echo "Vecka " . $week . " är inget datum... Rätt svar är: " . $response[0] . " - " . $response[1];

?>