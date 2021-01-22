<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Profil - Exercice 9</title>
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
              Informations
            </header>

             <div class="card-content">

    <?php

    $uploaddir = 'upload/';
    $uploadfile = $uploaddir . basename($_FILES['profilePic']['name']);
    $mimetype = mime_content_type($_FILES['profilePic']['tmp_name']);
    if (in_array($mimetype, array('image/jpeg', 'image/gif', 'image/png'))) {
        move_uploaded_file($_FILES['profilePic']['tmp_name'], $uploaddir . $_FILES['profilePic']['name']);
    ?>

        <h1>Page de profil</h1>
        <img>
        <p>
            <img height="100" width="100" src="<?php echo 'upload/' . $_FILES['profilePic']['name'] ?>"> <br>
            Nom : <b><?php echo htmlspecialchars(strip_tags($_POST['lastname'])) ?></b> <br>
            Prénom : <b><?php echo  htmlspecialchars(strip_tags($_POST['firstname'])) ?></b> <br>
            Date de naissance : <b><?php echo $_POST['birth']; ?></b><br>
        </p>

    <?php
    } else {
        echo "Veuillez renseigner tous les champs";
    }

    ?>

                </div>
               </div>

                </div>
            </main>
</body>
