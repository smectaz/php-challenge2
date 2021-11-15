<?php include('inc/head.php');

define("BR", "<br><br><br>");

if (!is_dir($_GET["delete"])) {
    unlink($_GET["delete"]);
} else {
    $files = scandir($_GET["delete"]);
    foreach ($files as $key => $value) {
        $path = realpath($_GET["delete"] . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            unlink($path);
        }
    }
    rmdir($_GET["delete"]);
}

header("Location: index.php");

include('inc/foot.php'); ?>
