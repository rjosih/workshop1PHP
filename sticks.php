<?php
session_start();

$_SESSION["sticks"] = 4;
var_dump($_SESSION);

$whoIsPlaying = isset($_GET["player"]) ? $_GET["player"] : "player1";



echo("PLAYER:" .$whoIsPlaying);


$totalSticks = 10;
$takenSticks = isset($_GET["sticks"]) ? $_GET["sticks"] : 0;


if($whoIsPlaying == "player1") {
    $whoIsPlaying = "player2";
} else {
    $whoIsPlaying = "player1";
}

//Knappar med olika värden 
echo("<button><a href='?sticks=".($takenSticks + 1)."&player=".($whoIsPlaying)."'>1</a></button>");

echo("<a href='?sticks=".($takenSticks + 2)."&player=".($whoIsPlaying)."'>2</a>");

echo("<a href='?sticks=".($takenSticks + 3)."&player=".($whoIsPlaying)."'>3</a>");


//Hur många stickor finns kvar?
echo("<p>Sticks kvar: " . ($totalSticks - $takenSticks) . "</p>");

if($totalSticks - $takenSticks <= 0) {
    echo($whoIsPlaying . " förlorade!");
}



//tre knappar med olika värden CHECK
// text överst vem som spelar
// Visar upp antal stickor som finns kvar CHECK






//10 stickor
//Välj antal stickor 1-3 spelare 1 
//Välj antal stickor 1-3 spelare 2
//Den som tar sista stickan förlorar
