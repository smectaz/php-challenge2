<?php
require 'connect.php';

$pdo = new \PDO(DSN, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();
?>

<!doctype html>
<html>

<head>
    <title>
        Présentation de mes amis
    </title>
    <meta charset="utf-8">
</head>

<body>
    <h1>
        Liste de mes Amis
    </h1>

    <table style="border:solid 1px black; text-align:center">
        <tr>
            <th style="border-right:solid 1px black;">Prénom</th>
            <th>Nom</th>
        </tr>
        <tr>
            <?php foreach ($friends as $friend) {?>
            <td style="border-right:solid 1px black;"><?php echo $friend['firstname']; ?></td>
            <td><?php echo $friend['lastname']; ?></td>
        </tr>
        <?php }?>
    </table>
    <h1>Ajouter un ami</h1> <br>

    <form method="POST" action="">

        <label for="firstname">Prénom</label><br>
        <input type="text" name="firstname" /><br>

        <label for="lastname">Nom</label></br>
        <input type="text" name="lastname" /><br>

        <input type="submit" name="ajout" value="Ajouter">
    </form>
    <?php

if (isset($_POST['ajout'])) {

    if (empty($_POST['firstname']) || empty($_POST['lastname'])) {
        echo "Pourriez vous remplir tous les champs";
    } else if (strlen($_POST['firstname']) >= 45) {
        echo "Veuillez choisir un prénom de 45 lettres maximun! Merci!";
    } else if (strlen($_POST['lastname']) >= 45) {
        echo "Veuillez choisir un nom de 45 lettres maximun! Merci!";
    } else if (!empty($_POST)) {
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);

        $query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';

        $statement = $pdo->prepare($query);

        $statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
        $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);

        $statement->execute();

        $friends = $statement->fetchAll();

        header('Location: inde.php');
    }
}
?>
</body>

</html>