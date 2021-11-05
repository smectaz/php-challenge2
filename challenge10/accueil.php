<?php
require "create/connexion.php";
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
    <h1>"BIENVENUE DANS VOTRE GESTIONNAIRE DE BIBLIOTHEQUE"</h1>
    <?php if (!empty($_SESSION['name'])) {?>
    <nav>
        <ul>
            <li><a href="create/creation.php">Entrez un livre dans la bibliothèque</a></li>
            <br>
            <li><a href="create/creation-auteur.php">Entrez un auteur dans la bibliothèque</a></li>
            <br>
            <li><a href="read/livre.php">Voir la bibliothèque</a></li>
            <br>
            <li><a href="read/auteur.php">Voir les écrivain ou écrivaine</a></li>
            <br>
            <li>
                <form action="#" method="post">
                    <label for="title">Recherche simple par le titre </label>
                    <input type="search" name="title" id="search">
                    <input type="submit" name="Cherche" value="chercher">
                </form>
            </li>
            <br>
            <li><a href="read/recherche.php">recherche complexe d'un livre</a></li>
        </ul>
    </nav>
    <?php
if ($_POST) {
    if ($_POST['title']) {
        $titlesearch = $_POST['title'];
        $query = "SELECT `name`, `title`, book.id, `genre`, `date_edition`, `author_id` FROM book INNER JOIN author ON book.author_id=author.id WHERE title LIKE '%$titlesearch%' ORDER BY `title` ASC";

        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo ("Le titre est " . $row['title'] . ".<br>");
            ?>
    <form action="livresimple.php" method="post">
        <input type="text" name="title" id="title" value="<?php echo ($row['title']); ?>" hidden>
        <input type="text" name="name" id="name" value="<?php echo ($row['name']); ?>" hidden>
        <input type="text" name="genre" id="genre" value="<?php echo ($row['genre']); ?>" hidden>
        <input type="text" name="date_edition" id="date_edition" value="<?php echo ($row['date_edition']); ?>" hidden>
        <input type="submit" value="apercu du livre">
    </form>

    <hr>

    <?php }}}} else {
    echo "Bonjour donkey<br>";
    ?>
    <a href="login.php">Connectez-vous</a>
    <h1>Accedez à la bibliothèque sans connection</h1>
    <nav>
        <ul>

            <li><a href="read/livre.php">Voir la bibliothèque</a></li>
            <br>
            <li><a href="read/auteur.php">Voir les écrivain ou écrivaine</a></li>
            <br>
            <li>
                <form action="#" method="post">
                    <label for="title">Recherche simple par le titre </label>
                    <input type="search" name="title" id="search">
                    <input type="submit" name="Cherche" value="chercher">
                </form>
            </li>
        </ul>
    </nav>
    <?php
if ($_POST) {
        if ($_POST['title']) {
            $titlesearch = $_POST['title'];
            $query = "SELECT `name`, `title`, book.id, `genre`, `date_edition`, `author_id` FROM book INNER JOIN author ON book.author_id=author.id WHERE title LIKE '%$titlesearch%' ORDER BY `title` ASC";

            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo ("Le titre du livre est: " . $row['title'] . ".<hr>");
            }}?>

    <?php }}?>
</body>

</html>