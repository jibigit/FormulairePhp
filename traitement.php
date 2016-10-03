<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$age = htmlspecialchars($_POST['age']);
$ville = htmlspecialchars($_POST['ville']);


// ici je vérifie si les champs sont bien remplis

if (empty($nom))
		{
			echo 'Le champs nom est vide';
		}
		elseif (empty($prenom)) {
			echo 'Le champs prénom est vide';
		}
		elseif (!is_numeric($age)) {
			echo 'Votre age doit être un nombre !';
		}
		elseif (empty($_POST['sexe'])) {
			echo 'Le champs sexe est vide ';
		}

		elseif (empty($ville)) {
			echo 'le champs ville est vide ';
		}
		

// Ici je vérifie la taille et les extensions du fichier a upload


elseif (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
		{
	        if ($_FILES['monfichier']['size'] <= 1000000)
	        {
                $infos = pathinfo($_FILES['monfichier']['name']);
                $extensionFichier = $infos['extension'];
                $extensionsAutorisees = array('txt', 'doc', 'docx', 'odt', 'zip', 'jpg', 'jpeg', 'gif', 'png', 'html' );
                $nomTemporaire = $_FILES['monfichier']['tmp_name'];
                $nomDuFichier = $_FILES['monfichier']['name'];


                // si tout est correct j'affiche un message de confirmation


                if (in_array($extensionFichier, $extensionsAutorisees))
                {
                    move_uploaded_file( $nomTemporaire, 'fichiers/' . basename($nomDuFichier));
                    echo 'Félicitations ' . ($prenom) . ' ' . ($nom) . ', tu as ' . ($age) . ' ans ' . 'de sexe ' . ($_POST['sexe']) . ' et tu habites à ' . ($ville) . ' et ton loisir preféré est  le : ' . ($_POST['loisirs']) . '.<br> Nous avons bien reçu votre fichier !';
                }
                 else
	       		{
	       		echo "Extension non autorisée !";
	       		}


	        }

		}



else
		{

			echo ('Fichier trop volumineux ! '); 
		}
	?> 
	



</body>
</html>







