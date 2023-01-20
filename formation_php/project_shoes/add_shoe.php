<?= include("./database/connexion.inc.php");?>
    <?= include("./database/prepare_query.inc.php")?>
<?php
if(isset($_POST['form_name']) && isset($_POST['form_price'])){
    if(!empty($_POST['form_name']) && !empty($_POST['form_price'])){
        $form_name = $_POST["form_name"];
        $form_price = $_POST["form_price"];
        if(is_numeric($form_price)){
            $mysqli = db_connect();            
            if($mysqli){
                $error = "";
                if(insert_shoe($mysqli,$form_name,$form_price,$error)){
                    $form_message = "La chaussure à été crée !";
                }
                else{
                    $form_message = $error;
                }
            }
            else{
                $form_message = "Erreur database connexion";
            }

        }
        else{
            $form_message = "Le prix doit être un nombre.";
        }                           
    };
};
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
    <?php include("./menu.php"); ?>
    
    <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label for="form_name">Nom :</label>
        <input type="text" name="form_name" id="form_name" required>
        <label for="form_price">Prix :</label>
        <input type="number" name="form_price" id="form_price" min="1" step="any" required>
        <input type="submit" value="Envoyer" name="form_submit">
        <p> <?= isset($form_message)?$form_message:null ?> </p>
        
    </form>
</body>
</html>