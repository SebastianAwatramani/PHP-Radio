<?php
include("includes/autoload.php");

/*This is a server side car radio (dashboard) interface to demonstrate the command pattern
Realistically, this would be much better handled client-side with Javascript,

And yes, technically I could just grab the POST data and manipulate the output directly, but the point of this
is to demonstrate my skills with OOP PHP

So let's begin
*/

//Since this is just a demo, the station numbers are hardcoded
$stations = array(
    "89.5",
    "93.3",
    "95.7",
    "102.1",
    "106.7"
);


//A simple factory is used to create the various objects our program will use
$factory = new SimpleFactory();


//The client performs the majority of the program logic and holds references to a Dashboard (like a remote) and a display (text output)
//It takes a list of stations
$client = $factory->createClient($stations);

//This creates a series of separate commands to switch the radio station based on the $stations array above
//It takes a factory to make the commands, just in order to keep this logic here simple
$client->setRadioSwitchCommands($factory);

//This tracks which button was actually pressed (i.e. which station to switch to.  If nothing, it defaults to fhe first station
$buttonIndex = !empty($_POST['buttonIndex'][0]) ? $_POST['buttonIndex'][0] : 0;

//Event that fires the button press
$client->dashboard()->buttonWasPressed($buttonIndex);


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

<form action="" method="post">
    <?php
    for ($i = 0; $i < count($client->getStations()); $i++) {
        echo "<button name='buttonIndex' value='$i'>{$client->getStations()[$i]}</button>\n";
    }
    var_dump($_POST);
    ?>
</form>

</body>
</html>
