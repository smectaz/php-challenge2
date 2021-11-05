<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table style="border: 1px solid black">
        <tr>
            <td>
                <?php
echo ("Le titre du livre est: " . $_POST['title'] . "<hr>");
?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
echo ("Le nom de l'auteur est " . $_POST['name'] . "<hr>");
?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
echo ("Le genre du livre est: " . $_POST['genre'] . "<hr>");
?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
echo ("Le livre a été publié en: " . $_POST['date_edition'] . "<br>");
?>
            </td>
        </tr>
    </table>
    <br>
    <a href="read/livre.php">Retour à la liste compléte des livres</a>
</body>

</html>