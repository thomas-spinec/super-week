<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de livre</title>
</head>

<body>

    <?php if (isset($error['empty'])) : ?>
        <p><?= $error['empty'] ?></p>
    <?php endif; ?>


    <form action="" method="post">
        <label for="titre">Titre:</label>
        <input type="text" name="titre" id="titre">
        <label for="content">Contenu</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <input type="submit" value="Ajouter">
    </form>
</body>

</html>