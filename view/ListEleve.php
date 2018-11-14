<!DOCTYPE html>
<html>
<head>
	<title>ListClasse</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body>
<div class="containe col-md-6 col-md-offset-">
	    <div class="panel panel-primary">
	    <div class="panel-heading">Formulaire de Modification</div>
        <div class="panel panel-body">
	      <form method="POST" action="../traitement/TAjoutClasse.php">
	    <div class="form-group">
	<label>login</label>
	<input type="text" name="login" class="form-control">
        </div>
        <label>Mot de passe</label>
        <input type="text" name="pwd" class="form-control">
        </div>
       <button  class="btn btn-success name="connect" type="submit" >Connecter</button>
       <button class="btn" btn-warning" name="annul" type="reset" >Annuler</button>
     </form>
    </div>
   </div>
 </body>
</html>