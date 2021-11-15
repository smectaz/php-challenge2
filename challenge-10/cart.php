<?php
require "create/connexion.php";

if (isset($_POST)) {
    $title = $_POST['title'];
    $author = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total = ($quantity * $price);

    echo ($_SESSION['name'] . ", vous souhaitez acheter ce livre: ");
    ?>

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
        <tr>
            <td>
                <?php
echo ("quantité commandée: " . $_POST['quantity'] . ".<br> Le prix à l'unité est de " . $_POST['price']);
    ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
echo ("Le montant total de votre commande: " . $total . "<br>");
    ?>
            </td>
        </tr>
    </table>
    <br>
    <form action="read/livre.php" method="post">
        <button type="submit" name="achat" value="achat">valider votre achat</button>
        <button type="submit" name="retour" value="retour">reprendre votre commande</button>
    </form>
</body>

</html>
<?php }?>