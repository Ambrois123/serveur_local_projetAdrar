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

    <h2>Modifier une chaussure</h2>

    <form action="<?=($_SERVER['PHP_SELF'])?>" method="post">
    <label for="form_id">Identifiant produit</label>
            <input type="number" name="form_id" id="form_id">
        <label for="form_name">Nom :</label>
        <input type="text" name="form_name" id="form_name" required>
        <label for="form_price">Prix :</label>
        <input type="number" name="form_price" id="form_price" min="1" step="any" required>
        <input type="submit" value="Modifier" name="form_submit">
        <p> <?= isset($form_message)?$form_message:null ?> </p>
        
    </form>
</body>
</html>