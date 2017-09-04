<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("Game.php");

session_start();

//Sets the session if the game is not started yet, starts new gane with 10 sticks
if(isset($_SESSION['game']) === false){
  $_SESSION['game'] = new Game();
}

$whoIsPlaying = $_SESSION['game']->getCurrentPlayer();
$sticksLeft = $_SESSION['game']->getSticksLeft();


echo("PLAYER: " . $whoIsPlaying . "<br><br>");


//Knappar submittar hur många pinnar spelaren drar
//needs to submit how many sticks the user wants to remove
$sticksToTake = 
"<input type='button' name='1' value='Ta 1 sticka'>" .
"<input type='button' name='2' value='Ta 2 stickor'>" .
"<input type='button' name='3' value='Ta 3 stickor'>"
;

//Resets the game by resetting the URL
$startNewGame = "<a href='/'><button>Play again</button></a>";


//Om det inte finns stickor kvar, presentera förloraren
if($sticksLeft <= 0) {
   echo $whoIsPlaying . " förlorade!" . $startNewGame;
}else{
  echo $sticksToTake . "<p>Sticks kvar: " . $_SESSION['game']->getSticksLeft() . "</p>";
}
