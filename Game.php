<?php

class Game {

  private $currentPlayer = "Player1";
  private $sticksLeft = 10;

  public function __construct(){
  }

  public function getCurrentPlayer(){
    return $this->currentPlayer;
  }

  public function getSticksLeft(){
    return $this->sticksLeft;
  }

  public function removeSticks($amountOfSticks){
    //Kasta undantag om antalet sticks är mindre än 1 eller större än 3
    $this->sticksLeft - $amountOfSticks;
  }

}
