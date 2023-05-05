<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Ajout de livre</title>
</head>

<body>
    <header>
        <h2>Projet Super-week</h2>
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