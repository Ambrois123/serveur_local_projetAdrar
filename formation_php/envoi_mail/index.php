<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="mail.php" method="post">
        <div>
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name">
        </div>
        <div>
        <label for="email">Email : </label>
        <input type="email" name="email" id="email">
        </div>
        <label for="message">Message : </label><br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</html>
