<!DOCTYPE html>
<html>
<head>
	<title>AjoutClasse</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style/bootstrap-cerulean.min.css">
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
	    <div class="containe col-md-6 col-md-offset-">
	    <div class="panel panel-primary">
	    <div class="panel-heading">Connection</div>
	      <form method="POST" action="../traitement/TAjoutClasse.php">
	    <div class="form-group">
	<label>login</label>
	<input type="text" name="login" class="form-control">
        </div>
        <div class="form-group">
        <label>Mot de passe</label>
        <input type="text" name="pwd" class="form-control">
        </div>
       <button  class="btn btn-success name="connect" type="submit" >Connecter</button>
       <button class="btn" btn-warning" name="annul" type="reset" >Annuler</button>
     </form>
    </div>
   </div>
	 <!-- footer -->
	<div id="footer">
		<div class="footer">
		&reg; 2017/2018 <a class="new_window" href="#" target="_blank" rel="nofollow">Lycée Le Lycée d’Excellence de Dakar. Gestion de la scolarité</a><br />
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
 </body>
</html>