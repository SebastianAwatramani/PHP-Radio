<?php


function autoLoad($className)
{

    include "classes/" . $className . ".class.php";
}

spl_autoload_register("autoload");


$dashboard = new Dashboard();
$stationDisplay = new Idisplay();
$stationDisplay->setOutput("88.5");

echo nl2br($stationDisplay->getOutput());

$stations = array(
    "89.5",
    "93.3",
    "95.7",
    "102.1",
    "106.7"
);

for($i = 0; $i < 5; $i++)
{
    $command = new SwitchToFavoriteStationCommand($stationDisplay, $stations[$i]);
    $dashboard->setCommand($i, $command);
}

for ($i = 0; $i < 5; $i++) {
    $dashboard->buttonWasPressed($i);
    echo nl2br($stationDisplay->getOutput());
}

