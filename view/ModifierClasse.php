<?php
  if(isset($_GET['ok'])){
    $_code =$_GET['ok'];
    $f_fopen("../Classeur/classee.csv", "r");
    while ($tab = fgetcsv($f, 1000,";")){
        if($code == $tab [0]){
            $libelle = $tab[1];
  } 
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>ModifierClasse</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body>
        <?php
           if (isset($_GET["ok"])){
	            if($_GET["ok"] == true){
		               echo "<div_class-'alert alert-success'>Classe ajoutee avec succes</div>"
	             }
	            else echo "<div_class-'alert alert-danger'>Classe ajoutee avec succes</div>"
               }
	      ?>
	   <nav class="navbar navbar-inverse">
		  <ul classe="nav navbar-nav">
			<li><a href="ListClasse.php">Gestion des classes</a></li>
			<li><a href="ListEleve.php">Gestion des Etudiants</a></li>
		</ul>
    </nav>
	    <div class="containe col-md-6 col-md-offset-">
	    <div class="panel panel-primary">
	    <div class="panel-heading">Formulaire de Modification</div>
	      <form method="POST" action="../traitement/TModifiClasse.php"> 
	    <div class="form-group">
	<label>Code</label>
	<input type="text" name="Code" class="form-control" value="<?php echo $Code?>">
    <div class="form-group">
    <label>labelle</label>
    <input type="text" name="libelle" class="form-control" value="<?php echo $labelle?>">
        </div>
       <button type="submit" name="valider" class="btn" btn-success>Envoyer</button>
       <button type="reset" name="annuler" class="btn" btn-warning>Annuler</button>
     </form>
    </div>
   </div>
 </body>
</html>