<?php include("./menu.php"); ?>
<?= include("./database/connexion.inc.php");?>
<?= include("./database/prepare_query.inc.php");?>
<?php

if(isset($_GET['form_id']) && !empty($_GET['form_id'])){
    $form_id = $_GET['form_id'];
    
    if(!is_integer($form_id) && $form_id > 0){

        $mysqli = db_connect();

        if($mysqli){
            $error= "";

            if(delete_shoe($mysqli,$form_id,$error)){

                $form_message = "La chaussure a été bien supprimé";

            }else{

                $form_message = "L'identifiant n'existe pas.";
            }
        }else{
            $form_message = "Erreur de connexion";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet chaussures</title>
</head>
<body>
<h1>Catalogue chaussures</h1>
    <h2>Supprimer une chaussure</h2>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="form_id">Identifiant produit</label>
            <input type="number" name="form_id" id="form_id">

            <input type="submit" value="Supprimer la chaussure" >
            <p> <?= isset($form_message)?$form_message:null ?> </p>
        </form>
        
    </form>
</body>
</html>