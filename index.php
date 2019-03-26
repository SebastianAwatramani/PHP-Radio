<?php

include ("includes/autoload.php");

$dashboard = new Dashboard();
$display = new IDisplay();
$client = new Client($dashboard, $display);

for ($i = 0; $i < 5; $i++) {
    $command = new SwitchToFavoriteStationCommand($client->display(), $client->getStations()[$i]);
    $client->dashboard()->setCommand($i, $command);
}

$button = $_GET['buttonIndex'] || 0;

$client->dashboard()->buttonWasPressed($button);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p id="currentStation"><?php echo $client->display()->getOutput(); ?></p>


</body>
</html>
