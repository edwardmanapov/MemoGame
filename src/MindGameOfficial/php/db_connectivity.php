<?php
		try
		{
			// 
			$bdd = new PDO ("mysql:host=localhost;dbname=manapov_mind_game_db","root","");
		}
		catch(Exception $e)
		{	
			die ("ERROR: " .$e ->getMessage() );
		}
?>