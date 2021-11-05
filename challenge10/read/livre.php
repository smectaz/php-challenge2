<?php
require "../create/connexion.php";

$query = "SELECT `name`, `title`, book.id, `genre`, `date_edition`, `author_id`, `price` FROM book INNER JOIN author ON book.author_id=author.id";

if (isset($_POST['author_id'])) {
    $query .= ' WHERE author.id=' . $_POST['author_id'];
}

$result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    section {
        border: solid 1px black;
        display: inline-block;
        width: 20rem;
        margin: 10px;
        text-align: center;
    }

    .button {
        display: flex;
        justify-content: space-around;
    }
    </style>
    <title>Document</title>
</head>

<body>
    <?php

$query1 = "SELECT * FROM author";

$result1 = mysqli_query($conn, $query1);

?>
    <form action="#" method="post">
        <label for="author">Auteur du livre</label>

        <select name="author_id" id="author">
            <?php
while ($row = mysqli_fetch_assoc($result1)) {
    ?>
            <option value="
            <?php
echo ($row['id']); ?>
            "><?php
echo ($row['name']); ?></option>
            <?php }?>
        </select>
        <button type="submit">Voir les livres</button>
    </form>
    <br>




    <?php
if (!empty($_POST['achat'])) {
    echo "Votre commande a été validée.<br>";
}

if (!empty($_POST['retour'])) {
    echo "Vous pouvez continuer vos achats.<br><br>";
}

if (!empty($_SESSION['name'])) {
    //$_SESSION['name'] = $_POST['name'];
    echo "Bonjour " . $_SESSION['name'] . "<br>";

    ?>
    <a href="../logout.php">Déconnectez-vous</a>
    <br>
    <?php
while ($row = mysqli_fetch_assoc($result)) {
        ?>

    <section>
        <div>
            <?php
echo ("Titre du livre: " . $row["title"]);
        ?>
        </div>
        <hr>
        <div>
            <?php
echo ("Auteur du livre: " . $row["name"]);
        ?>
        </div>
        <hr>
        <div>
            <?php
echo ("Genre du livre: " . $row["genre"]);
        ?>
        </div>
        <hr>
        <div>
            <?php
echo ("Publié en: " . $row["date_edition"]);
        ?>
        </div>
        <hr>
        <?php
echo ("Prix du livre: " . $row["price"]);
        ?>
        <hr>


        <div class="button">
            <form action="../update/update.php" method="post">
                <input type="text" name="id" id="id" value="<?php echo ($row["id"]); ?> " hidden>
                <input type="text" name="title" id="title" value="<?php echo ($row["title"]); ?> " hidden>
                <input type="text" name="author_id" id="author_id" value="<?php echo ($row["author_id"]); ?> " hidden>
                <input type="text" name="name" id="name" value="<?php echo ($row["name"]); ?> " hidden>
                <input type="text" name="genre" id="genre" value="<?php echo ($row["genre"]); ?> " hidden>
                <input type="text" name="date_edition" id="date_edition" value="<?php echo ($row["date_edition"]); ?>"
                    hidden>
                <input type="text" name="price" id="price" value="<?php echo ($row["price"]); ?>" hidden>
                <button type="submit">Modifier</button>
            </form>
            <form action="../delete/delete.php" method="post">
                <input type="text" name="title" id="title" value="<?php echo ($row["title"]); ?> " hidden>
                <input type="text" name="id" id="id" value="<?php echo ($row["id"]); ?> " hidden>
                <button type="submit">Supprimer</button>
            </form>
        </div>
        <br>
        <form action="../cart.php" method="post">
            <input type="text" name="id" id="id" value="<?php echo ($row["id"]); ?> " hidden>
            <input type="text" name="title" id="title" value="<?php echo ($row["title"]); ?> " hidden>
            <input type="text" name="author_id" id="author_id" value="<?php echo ($row["author_id"]); ?> " hidden>
            <input type="text" name="name" id="name" value="<?php echo ($row["name"]); ?> " hidden>
            <input type="text" name="genre" id="genre" value="<?php echo ($row["genre"]); ?> " hidden>
            <input type="text" name="date_edition" id="date_edition" value="<?php echo ($row["date_edition"]); ?>"
                hidden>
            <input type="text" name="price" id="price" value="<?php echo ($row["price"]); ?>" hidden>
            <br>
            <label for="quantity">quantité de livre</label>
            <input type="number" name="quantity" id="quantity">
            <br>
            <br>
            <button type="submit">Acheter</button>
        </form>
        <br>
    </section>
    <?php
}
    ?>
    <br>
    <a href="../create/creation.php">Créer un livre</a>
    <br>
    <a href="../create/creation-auteur.php">Créer un écrivain ou une écrivaine</a>
    <br>
    <a href="auteur.php">Voir les écrivains ou écrivaines
    </a>
    <br>

    <a href="../accueil.php">Revenir à l'accueil</a>
    <?php
} else {
    echo "Bonjour donkey<br>";?>
    <a href="../login.php">Connectez-vous</a>
    <br>
    <a href="../accueil.php">Revenir à l'accueil</a>
    <br>
    <?php
while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <section>
        <div>
            <?php
echo ("Titre du livre: " . $row["title"]);
        ?>
        </div>
        <hr>
        <div>
            <?php
echo ("Auteur du livre: " . $row["name"]);
        ?>
        </div>
        <hr>
        <div>
            <?php
echo ("Genre du livre: " . $row["genre"]);
        ?>
        </div>
        <hr>
        <div>
            <?php
echo ("Publié en: " . $row["date_edition"]);
        ?>
        </div>
        <br>
    </section>
    <?php
}}

?>








</body>

</html>