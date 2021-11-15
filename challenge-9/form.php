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
            <input type="text" name="nom" id="nom" required />
            <br />
            <label for="prenom">prénom</label>
            <input type="text" name="prenom" id="prenom" required />
            <br />
            <label for="mail">email</label>
            <input type="text" name="mail" id="mail" required />
            <br />
            <label for="tel">téléphone</label>
            <input type="tel" name="tel" id="tel" required />
            <br />
            <select name="sujet" id="sujet" required>
            <option value="">selectionnez votre service</option>
            <option value="commercial">service commercial</option>
            <option value="technique">service technique</option>
            <option value="client">service client</option>
            </select>
            <br />
            <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            <br />
            <button type="submit">valider</button>
    </form>
    </body>

</html>
