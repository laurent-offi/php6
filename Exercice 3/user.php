<?php


	if(isset($_GET['form'])) {
		$name = htmlspecialchars($_GET['yourname']);
		$firstname = htmlspecialchars($_GET['yourfirstname']);
	}

		if(isset($name) && !empty($name) && isset($firstname) && !empty($firstname)) {
			echo "Il n'y a pas de lait $name $firstname !";
		}

