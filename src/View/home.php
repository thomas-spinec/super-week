<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

</body>

</html>