<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 9 (6) PHP</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="sRnfbNnRwW.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	</head>

		<main role="main">
		  <div class="card has-text-centered is-wide">
		    <header class="card-header">
		      Créer un profil
		    </header>

		     <div class="card-content">
			    <div id="formDIv">
			        <form action="profile.php" method="POST" enctype="multipart/form-data" id="form">
			            <!-- Civilité -->
			            <div>
			                <div>
			                    <input type="radio" id="Mr" name="gender" value="Mr" checked>
			                    <label for="Mr">Mr.</label>
			                </div>
			                <div>
			                    <input type="radio" id="Mme" name="gender" value="Mme" checked>
			                    <label for="Mme">Mme.</label>
			                </div>
			            </div>
			            <div>
			                <label for="name">Nom : </label>
			                <input type="text" name="lastname" id="lastname" required>
			            </div>
			            <div>
			                <label for="firstname">Prénom : </label>
			                <input type="text" name="firstname" id="firstname" required>
			            </div>
			            <div>
			                <label for=" birth">Date de naissance :</label>
			                <input type="date" id="birth" name="birth" value="">
			            </div>
			            <div>
			                <label for="profilePic">Image de profil : </label>
			                <input type="file" id="profilePic" name="profilePic" accept="image/png, image/jpeg, image/gif">
			            </div>
			            <input type="submit" value="Créer mon profil" id="buttonSubmit" name="buttonSubmit">
			        </form>
			    </div>
			   </div>

				</div>
			</main>
</body>
</html>