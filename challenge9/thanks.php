<?php

function test($result)
{
    $result = stripslashes($result);
    $result = trim($result);
    $result = htmlspecialchars($result);
    return $result;
}

if ($_POST) {

/*echo "
<pre>";
print_r($_POST);
echo "</pre>
";}
var_dump($_POST);*/
    if (empty($_POST['nom'])) {
        echo ("Vous devez mettre un nom<br>");
    } else {
        $nom = test($_POST['nom']);

    }

    if (empty($_POST['prenom'])) {
        echo ("Vous devez mettre un prenom<br>");
    } else {
        $prenom = test($_POST['prenom']);

    }

    if (empty($_POST['mail'])) {
        echo ("Vous devez mettre un email<br>");
    } else {

        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            echo "le format de l'email est incorrecte<br>";
        } else {
            $mail = test($_POST['mail']);
        }
    }

    if (empty($_POST['tel'])) {
        echo ("Vous devez mettre un numéro de téléphone pour étre recontacter<br>");
    } else {
        $tel = test($_POST['tel']);
    }

    if (empty($_POST['sujet'])) {
        echo ("Vous devez mettre le service concerné par votre message<br>");
    } else {
        $sujet = test($_POST['sujet']);

    }

    if (empty($_POST['message'])) {
        echo ("Vous devez mettre un message expliquant votre demande<br>");
    } else {
        $message = test($_POST['message']);

    }
    if (!empty($nom) && !empty($prenom) && !empty($tel) && !empty($mail) && !empty($sujet) && !empty($message)) {
        echo ("Merci " . $prenom . " " . $nom . " de nous avoir contacté à propos d'un problème " . $sujet . ". <br> Un de nos conseiller vous recontactera soit à l'adresse mail " . $mail . " ou par téléphone au " . $tel . " dans les plus bref délais pour traiter votre demande:<br>" . $message . ".");}
}