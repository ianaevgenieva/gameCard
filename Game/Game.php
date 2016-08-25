<?php

namespace Game;
use Card\HealthCard;
use Card\ShieldCard;
use Card\DamageCard;
class Game 
{
	protected $playerOne;
	protected $playerTwo;
	protected $deck =[];
	
	public function __construct($player1,$player2)
	{
		$this->playerOne = $player1;
		$this->playerTwo = $player2;
		
	}
	
	public function getPlayerOne()
	{
		return $this->getPlayerOne;
	}
	
	public function setPlayerOne($value)
	{
		return $this->playerOne = $value;
	}
	
	public function getPlayerTwo ()
	{
		return $this->getPlayerTwo;
	}
	
	public function setPlayerTwo($value)
	{
		return $this->playerTwo=$value;
	}
	
	public function getDeck()
	{
		return $this->deck;
	}
	
	public function setDeck($cardDamage,$cardShield,$cardHealth)
	{
		$this->deck;
		$decks= [];
		$deckCard= [$cardDamage,$cardHealth,$cardShield];
		for ($i = 0; $i <=31; $i++) {
			$decks[$i]=$deckCard[rand(0,2)];
		}
		//$this->deck = Sdecks;
	 	   return  $this->deck = $decks;
	}
	
	public function setFirstDeck()
	{
		$deckAll [] = $this->getDeck();
		$deckFirstPlayer = [];
		for ($j = 0; $j <10;$j++) {
		$deckFirstPlayer[$j] = $deckAll[$j];
	}
	return $deckFirstPlayer;
}
}