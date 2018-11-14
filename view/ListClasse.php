<!DOCTYPE html>
<html>
<head>
	<title>ListClasse</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body>
<nav class="navbar navbar-inverse">
		  <ul classe="nav navbar-nav">
			<li><a href="ListClasse.php">Gestion des classes</a></li>
			<li><a href="ListEleve.php">Gestion des Etudiants</a></li>
		</ul>
    </nav>
<div class="containe col-md-6 col-md-offset-">
	    <div class="panel panel-primary">
	    <div class="panel-heading">Formulaire de Modification</div>
        <div class="panel panel-body">
        <table>
        <table class="table table-bordered table-striped">
              <tr>
              <th>matricule</th>
              <th>nom </th>
              <th>prenom</th>
              <th>classe</th>
             </tr>
          </tr>
        <?php
        $f =fopen("../Classeur.cvs, "r");
        while($tab = fretcsv($f, 1000, ";"")){
            echo "<td>"; 
                    for ($i=0; $i < count($tab); $si++){
                        echo"<td>".$tab[$si]."</td>";  
                    }
          echo "<td><a href='ModififerClasse.php?ok=$tab[0]' class='btn btn-info btn-block'>Modifier</a></td>
                <td><a href='' class='btn btn-dnager btn-block'>Supprimer</a></td>";
          echo "</td>";
                    }
        ?>
        </tr>
     </div>
    </div>
   </div>
 </body>
</html>