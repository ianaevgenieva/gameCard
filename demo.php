<?php

use Cards\Card;
use Cards\DamageCard;
use Cards\HealthCard;
use Cards\ShieldCard;
use Game\Game;
use Player\Player;

require_once 'autoload.php';


 $damage = new DamageCard(20, 'ST');
 $health = new HealthCard(10, "H");
 $shield = new ShieldCard(10, "S");
 $game  = new Game("pencho","radko");
 
 $player = new Player("iancho");
 $game->setPlayerOne($player);
$deck []=$game->setDeck($damage, $health, $shield);
$deckPlayer = $game->setFirstDeck($deck);
print_r($deckPlayer);