<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="/super-week/Logo_onglet.png" />
    <title>Ajout de livre</title>
</head>

<body>
    <header>
        <h1><a href="/super-week">Projet Super-week</a></h1>
        <div id="perso">
            <a class="link" href="https://thomas-spinec.students-laplateforme.io/"><img src="/super-week/logo-thomas.png" alt="lien vers mon portfolio"></a>
        </div>
        <div class="logo">
            <a class="link" href="https://github.com/thomas-spinec/super-week"><img src="/super-week/github.png" alt="lien vers le repo"></a>
        </div>
    </header>

    <main>
        <h3>Ajout de livre</h3>
        <?php if (isset($error['empty'])) : ?>
            <p><?= $error['empty'] ?></p>
        <?php endif; ?>

        <div class="container">
            <form action="" method="post">
                <label for="titre">Titre:</label>
                <input type="text" name="titre" id="titre">
                <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenu"></textarea>
                <input type="submit" value="Ajouter">
            </form>
        </div>
    </main>

</body>

</html>