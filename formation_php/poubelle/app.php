<?php
echo "<pre>";
print_r($_GET);
echo "<pre>";

if(isset($_GET['form_name']) && isset($_GET['form_password']) && isset($_GET['form_email'])){
    if(!empty($_GET['form_name']) && !empty($_GET['form_password']) && !empty($_GET['form_email'])){
            //BDD
            $msqli = new mysqli("localhost", "username", "password", "database");
            if($mysqli){
                // créer utilisateur dans mysql
                //connection
                echo "<p>Connexion réussie. </p>";
                // recup data
                $result = $mysqli->query("SELECT * FROM users");
                var_dump($result->fetch_assoc());
            }else{
                echo "<p>La connexion a échoué. </p>";
            }
    }
}
/**Possible aussi :
 * if(isset($_GET['form_name']) && isset($_GET['form_password']) && isset($_GET['form_email']) 
 * $$ !empty($_GET['form_name']) && !empty($_GET['form_password']) && !empty($_GET['form_email'])){
 * }
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
        <input type="text" name="form_name">
        <input type="password" name="form_password">
        <input type="email" name="form_email">
        <input type="hidden" name="form_gps" value="">
        <input type="submit" value="Envoyer" name="form_submit">

    </form>
</body>
</html>