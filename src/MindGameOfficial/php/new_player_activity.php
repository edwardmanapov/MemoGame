<?php
	include "main_activity.php";
	
	// Creating new player instance
	$player = new player();
	
	// 
	if(isset ($_POST['player_name'])){
		$player->setPlayerName($_POST['player_name']);
		$player->InsertPlayer();
	
		// 
		header("Location: ../index.php?success=1");
	}
?>