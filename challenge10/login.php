<?php
require 'create/connexion.php';
?>
<h1>connection</h1>
<br>
<form action="read/livre.php" method="post">
    <div>
        <label for="nom">Entrez votre nom</label>
        <input type="text" name="nom" id="nom">
        <br>
        <br>
        <input type="submit" value="valide">
    </div>
</form>