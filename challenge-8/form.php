<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="thanks.php" method="post">
        <label for="nom">nom</label>
        <input type="text" name="nom" id="nom" />
        <br />
        <label for="prenom">prénom</label>
        <input type="text" name="prenom" id="prenom" />
        <br />
        <label for="mail">email</label>
        <input type="email" name="mail" id="mail" />
        <br />
        <label for="tel">téléphone</label>
        <input type="tel" name="tel" id="tel" />
        <br />
        <select name="sujet" id="sujet">
            <option value="commercial">service commercial</option>
            <option value="technique">service technique</option>
            <option value="client">service client</option>
        </select>
        <br />
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br />
        <button type="submit">valider</button>
    </form>
</body>

</html>