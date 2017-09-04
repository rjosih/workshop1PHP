<?php
session_start();

$whoIsPlaying = isset($_GET["player"]) ? $_GET["player"] : "player1";


echo("PLAYER: " .$whoIsPlaying . "<br><br>");

$totalSticks = 10;
$takenSticks = isset($_GET["sticks"]) ? $_GET["sticks"] : 0;
$sticksLeft = $totalSticks - $takenSticks;


if($whoIsPlaying == "player1") {
    $whoIsPlaying = "player2";
} else {
    $whoIsPlaying = "player1";
}

//Knappar som lägger till hur många stickor den aktiva spelaren drar
$sticksToTake = 
"<a href='?sticks=".($takenSticks + 1)."&player=".($whoIsPlaying)."'><button>Ta 1 sticka</button></a>" .
"<a href='?sticks=".($takenSticks + 2)."&player=".($whoIsPlaying)."'><button>Ta 2 stickor</button></a>" .
"<a href='?sticks=".($takenSticks + 3)."&player=".($whoIsPlaying)."'><button>Ta 3 stickor</button></a>"
;

//Resets the game by resetting the URL
$startNewGame = "<a href='/'><button>Play again</button></a>";


//Om det inte finns stickor kvar, presentera förloraren
if($sticksLeft <= 0) {
    echo $whoIsPlaying . " förlorade!" . $startNewGame;
}else{
  echo $sticksToTake . "<p>Sticks kvar: " . $sticksLeft . "</p>";
}



//tre knappar med olika värden CHECK
// text överst vem som spelar
// Visar upp antal stickor som finns kvar CHECK



//10 stickor
//Välj antal stickor 1-3 spelare 1 
//Välj antal stickor 1-3 spelare 2
//Den som tar sista stickan förlorar
