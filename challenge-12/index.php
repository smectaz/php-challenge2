<?php include('inc/head.php'); ?>

<!--    C'est ici que tu vas devoir afficher le contenu de tes repertoires et fichiers. -->

<?php

define("BR", "<br><br><br>");

if (isset($_POST["content"])) {
    $file = $_GET["f"];
    $openFile = fopen($file, 'w');
    fwrite($openFile, $_POST["content"]);
    fclose($openFile);
    header("Location: index.php");
}

// récupérer tous les fichiers d'un dossier de manière récursive
function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if ($value != ".DS_Store") {
            if (!is_dir($path) && $value != ".DS_Store") {
                $results[] = $path;
            } else if ($value != "." && $value != "..") {
                getDirContents($path, $results);
                $results[] = $path;
            }
        }
    }

    return $results;
}

$files = getDirContents("files");

foreach ($files as $file) {
    echo '<a href=?f='.$file.'>';
    echo basename($file)."<br>";
    echo '</a>';
}

if (isset($_GET["f"]) && str_contains($_GET["f"], ".jpg")) {
    ?>
    <form action="" method="get">
        <div>
            <?php echo "<img src=" . str_replace("/Users/moi/OneDrive/DonkeySchool/php/php_files_handling_ressources", "", $_GET["f"]) . " style='width:100%' alt=" . basename($_GET["f"]) . " >"; ?>
            <label for="">Delete image:</label>
            <?php
            echo '<a href=?d='.$_GET["f"].'>';
            echo basename($_GET["f"])."<br>";
            echo '</a>';
            ?>
        </div>
    </form>
    <?php
} elseif (isset($_GET["f"]) && !is_dir($_GET["f"])) {
    $content = file_get_contents($_GET["f"]);
    ?>
    <form action="" method="post">
        <div>
            <label for="">Edit file:</label>
            <textarea name="content" style="width:100%;height: 400px;">
                <?php echo $content; ?>
            </textarea>
            <input type="submit" value="Submit changes"/>
            <label for="">Delete file:</label>
            <?php
            echo '<a href=?d='.$_GET["f"].'>';
            echo basename($_GET["f"])."<br>";
            echo '</a>';
            ?>
        </div>
    </form>
    <?php
} elseif (isset($_GET["f"])) {
    ?>
    <form action="" method="post">
        <div>
            <label for="">Delete directory:</label>
            <?php
            echo '<a href=?d='.$_GET["f"].'>';
            echo basename($_GET["f"])."<br>";
            echo '</a>';
            ?>
        </div>
    </form>
    <?php
}

if (isset($_GET["d"])) {
    ?>
    <form action="delete.php" method="get">
        <div>
            <label for="">Do you really want to delete <?php echo basename($_GET["d"])?>?</label>
            <br>
            <input name="delete" type="hidden" value="<?php echo $_GET["d"]?>"/>
            <input type="submit" value="Yes, please delete <?php echo basename($_GET["d"]) ?>"/>
        </div>
    </form>
<?php
}

include('inc/foot.php');