<?php


	if(isset($_POST['form'])) {
		$name = htmlspecialchars($_POST['yourname']);
		$firstname = htmlspecialchars($_POST['yourfirstname']);
	}

		if(isset($name) && !empty($name) && isset($firstname) && !empty($firstname)) {
			echo "Il n'y a pas de lait $name $firstname !";
		}

