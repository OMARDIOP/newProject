<?php
  if(isset($_POS["valider"])){
  //recuperation des donnees du formulaire
    $code = $_POS["Code"];
    $libelle = $_POS["libelle"];

    $obj = $Code. ";" .$libelle. "n"; //contenu du fichier	
    $f = fopen("..Classeur/Classe.csv", "a");
    fputs($f, $obj);
     
    header("location:..view/AjoutClasse.php");
  }
?>