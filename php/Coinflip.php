<?php
include "../Core/init.php"; //Henter databasen
echo "<h1>Coinflip v1.004</h1>";

$Player1 = $ID[0];
$Player2 = $ID[1];

$Rolled = rand ( 0 , 100 ); //Laver et random roll

echo  "<br>Rolled: " . $Rolled . "<br>"; //skriver rolled ud

if ($Rolled <=50) // Tjekker hvem der vinder
{
    echo "<h2> Winner Stats </h2>";
    $Totalpoints[0] += $UserInput[1];
    $Totalpoints[1] = $Totalpoints[1] - $UserInput[1];
    echo $ID[0].
    "<br> Name: " . $Name[0] . "<br>".
    "Input: " . $UserInput[0] . "<br>".
    "Now Total Points: " . $Totalpoints[0];

    echo "<h2> Loser Stats </h2>";
    echo $ID[1].
        "<br> Name: " . $Name[1] . "<br>".
        "Input: " . $UserInput[1] . "<br>".
        "Now Total Points: " . $Totalpoints[1];


}
else
{
    echo "<h2> Winner Stats </h2>";
    $Totalpoints[1] += $UserInput[0];
    $Totalpoints[0] = ($Totalpoints[0]-$UserInput[0]);
    echo $ID[1].
        "<br> Name: " . $Name[1] . "<br>".
        "Input: " . $UserInput[1] . "<br>".
        "Now Total Points: " . $Totalpoints[1];

    echo "<h2> Loser Stats </h2>";
    echo $ID[0].
        "<br> Name: " . $Name[0] . "<br>".
        "Input: " . $UserInput[0] . "<br>".
        "Now Total Points: " . $Totalpoints[0];
}
?>

