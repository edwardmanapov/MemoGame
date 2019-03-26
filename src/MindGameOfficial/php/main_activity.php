<?php

// 
class player{
	
	private $PlayerName;

		public function getPlayerName(){
			return $this->player_name;
		}
		public function setPlayerName($player_name){
			$this->player_name=$player_name;
		}
		
		public function InsertPlayer(){
			include "db_connectivity.php";
			$req=$bdd->prepare("INSERT INTO players(player_name) VALUES(:player_name)");
			$req ->execute(array(
			'player_name'=>$this->getPlayerName()
			));
			}
		}
?>