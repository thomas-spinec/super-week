<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<body>

    <h1>register</h1>

    <?php if (isset($error)) : ?>
        <?php foreach ($error as $err) : ?>
            <p><?= $err ?></p>
        <?php endforeach; ?>
    <?php endif; ?>


    <form action="" method="post">
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" id="lastname">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <label for="password_confirm">Confirmer le mot de passe</label>
        <input type="password" name="password_confirm" id="password_confirm">
        <input type="submit" value="Envoyer">
    </form>

</body>

</html>