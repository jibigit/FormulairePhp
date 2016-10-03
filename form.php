<!DOCTYPE html>
<html>
<head>
<title>Formulaire PHP</title>

</head>
<body>
<form method="post" action="traitement.php" enctype="multipart/form-data">


<p><label>Nom : <input type="text" name="nom"></label></p>
<p><label>Prénom : <input type="text" name="prenom"></label></p>
<p><label>Age : <input type="text" name="age" ></label></p>


<p>Sexe : 
<label>Masculin</label>
<input type= "radio" name="sexe" value="Masculin"/>
<label>Féminin</label>
<input type= "radio" name="sexe" value="Féminin"/></p>




		
<p><label>Ville :</label> <input type="text" name="ville" ></p>


<p>Loisirs
<select name="loisirs">
<option name="Sport" value="sport"> Sport</option>
<option name="Lecture" value="lecture">Lecture </option>
<option name="cinema"  value="cinema"> Cinéma</option>
</select>
</p>



        <p>

                Formulaire d'envoi de fichier :

                <input type="file" name="monfichier"></p>

                <p> <input type="submit" value="Envoyer le fichier">

        </p>


</form>
</body>
</html>

