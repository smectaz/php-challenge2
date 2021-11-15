<?php
require "create/connexion.php";

echo "bonjour " . $_SESSION['name'];
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
    <form action="logout.php" method="get">
        <label for="oui">Souhaitez vous vraiment nous quittez ?</label>
        <br>
        <input type="submit" name="oui" value="oui">
        <br>

    </form>
    <form action="read/livre.php" method="post">
        <input type="text" name="name" id="name" value="<?php echo ($_SESSION['name']); ?>" hidden>
        <input type="submit" name="non" value="non">
    </form>

</body>

</html>

<?php
if ($_GET) {
    if (isset($_GET['oui'])) {
        session_destroy();
        header('Location:accueil.php');
    }

}?>