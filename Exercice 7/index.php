<?php


	if(isset($_POST['form'])) {
		$name = htmlspecialchars($_POST['yourname']);
		$firstname = htmlspecialchars($_POST['yourfirstname']);
		$civility = $_POST['civility'];
	}

		if(isset($name) && !empty($name) && isset($firstname) && !empty($firstname)) {
			$success = "Il n'y a pas de lait $civility $name $firstname.";
			$valid = true;

			}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 7 (6) PHP</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="sRnfbNnRwW.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	</head>

	<body>

		<main role="main">
		  <div class="card has-text-centered is-wide">
		    <header class="card-header">
		      Informations
		    </header>

		    <form method="post" action="index.php" enctype="multipart/form-data">



	    <div class="card-content">

		<?php if(!isset($valid)) { ?>


			<div class="select">

			 	<select name="civility">
				    <option>Mr.</option>
				    <option>Mme.</option>
				    <option>hélicoptère de combat</option>
				  </select>
				</div>

				<div class="field">
				  	<div class="control">
				  		<label>Votre nom :</label>
				   		<input class="input" type="text" name="yourname" placeholder="Reporter" required>
					</div>

					<div class="control">
						<label>Votre prénom :</label>
				   		<input class="input" type="text" name="yourfirstname" placeholder="Albert" required>
					</div>

					<div class="control">
                    	<label for="pic">Fichier a poster : </label>
                   	 	<input type="file" name="pic" accept="image/png, image/jpeg">
                   	</div>

					<div class="field">
  						<div class="control">
    						<button name="form" class="button is-outline">Envoyer</button>
  						</div>

  						<?php } else {

  								$mimetype = mime_content_type($_FILES['file']['tmp_name']);

       							if (in_array($mimetype, array('application/pdf'))) { 

       					?>
       					
  							<p class="help is-success">
  								<?php echo $success;

       								echo "<br> Vous avez posté le fichier suivant : " . $_FILES['file']['name'];
       							} else {
       								echo "Ceci n'est pas un PDF.";
       							}
			
  								 ?>

							</p>
  						<?php  } ?>

				</div>

		    </div>

		  </div>

		</main>

	</body>


</html>