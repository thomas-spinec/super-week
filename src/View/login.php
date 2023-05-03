<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>

    <h1>register</h1>

    <?php if (isset($errors)) : ?>
        <?php foreach ($errors as $err) : ?>
            <p><?= $err ?></p>
        <?php endforeach; ?>
    <?php endif; ?>


    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Envoyer">
    </form>

</body>

</html>