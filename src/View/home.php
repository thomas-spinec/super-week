<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script/home.js" defer></script>
    <title>Acceuil</title>
</head>

<body>
    <h1>Acceuil</h1>
    <?php if (isset($_SESSION['user'])) : ?>
        <p>Bonjour <?= $_SESSION['user']['firstname'] ?></p>
        <a href="logout">Se déconnecter</a>
    <?php else : ?>
        <a href="register">S'inscrire</a>
        <a href="login">Se connecter</a>

    <?php endif; ?>

    <br><br>
    <button id="users">Liste des utilisateurs</button>
    <button id="books">Liste des livres</button>
    <br><br>
    <label for="idUser">Id utilisateur</label>
    <input type="number" name="idUser" id="idUser" min="0">
    <button id="submitUser">Chercher</button>
    <br><br>
    <label for="idBook">Id Livre</label>
    <input type="number" name="idBook" id="idBook" min="0">
    <button id="submitBook">Chercher</button>

    <div id="result"></div>


</body>

</html>