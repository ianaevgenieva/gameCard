<?php
namespace Player;

use Cards\HealthCard;
use Cards\ShieldCard;
use Game\Game;
class Player
{
	const MAX_HEALTH = 100;

	protected $health;

	protected $name;

	protected $shield;
	
	protected $deckPlayer=[];

	public function __construct($name)
	{
		$this->name = $name;
		$this->health = self::MAX_HEALTH;
	}

	public function getHealth()
	{
		return $this->health;
	}

	public function setHealth($value)
	{
		$this->health = $value;
	}
	
	public function getDeckPlayer()
	{
		return $this->deckPlayer;
	}
	
	
// 	

	public function takeDamage($value)
	{
		if ($this->health >= $value) {
			$this->health -= $value;
		} else {
			$this->health = 0;
		}
	}

	public function increaseHealth($value)
	{
		$total = $this->health + $value;
		// $this->health = $total > self::MAX_HEALTH ? self::MAX_HEALTH : $otal
		$this->health = min(self::MAX_HEALTH, $total);
	}
	
	public function haveShield($value)
	{
		$total = $this->health+($value-self::HEALTH_CARD_VALUE ); 
	}

	
	
}