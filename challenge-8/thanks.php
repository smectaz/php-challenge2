<?php
/*if ($_POST) {

echo "
<pre>";
print_r($_POST);
echo "</pre>
";}
var_dump($_POST);*/

echo ("Merci " . $_POST['prenom'] . " " . $_POST['nom'] . " de nous avoir contacté à propos de " . $_POST['sujet'] . ". <br> Un de nos conseiller vous contactera soit à l'adresse " . $_POST['mail'] . " ou par téléphone au " . $_POST['tel'] . " dans les plus bref délais pour traiter votre demande:<br>" . $_POST['message'] . ".");