<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script/home.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title>Acceuil</title>
</head>

<body>
    <header>
        <h1>Projet Super-week</h1>
    </header>

    <main>
        <h3>Acceuil</h3>
        <?php if (isset($_SESSION['user'])) : ?>
            <p>Bonjour <?= $_SESSION['user']['firstname'] ?></p>
            <div class="flex_row">
                <a href="logout">Se déconnecter</a>
                <a href="books/write">Ecrire un livre</a>
            </div>
        <?php else : ?>
            <p>Bonjour visiteur</p>
            <div class="flex_row">
                <a href="register">S'inscrire</a>
                <a href="login">Se connecter</a>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row">
                <div class="col w-20">
                    <button id="users">Liste des utilisateurs</button>
                </div>
                <div class="col w-20">
                    <button id="books">Liste des livres</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="number" name="idUser" id="idUser" min="0" placeholder="id">
                </div>
                <div class="col w-20">
                    <button id="submitUser">Utilisateur</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="number" name="idBook" id="idBook" min="0" placeholder="id">
                </div>
                <div class="col w-20">
                    <button id="submitBook">Livre</button>
                </div>
            </div>

        </div>

        <div id="result"></div>
    </main>



</body>

</html>