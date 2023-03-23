<?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!isset($_POST['last_name']) || trim($_POST['last_name']) == ''){
        $errors[] = 'Veuillez entrer votre nom';
    }
    if(!isset($_POST['first_name']) || trim($_POST['first_name']) == ''){
        $errors[] = 'Veuillez entrer votre prénom';
    }
    if(!isset($_POST['user_email']) || trim($_POST['user_email']) == '' || filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = 'Veuillez entrer votre adresse mail';
    }
    if(!isset($_POST['user_phone']) || trim($_POST['user_phone']) == ''){
        $errors[] = 'Veuillez entrer votre numéro de téléphone';
    }
    if(!isset($_POST['user_message']) || trim($_POST['user_message']) == ''){
        $errors[] = 'Veuillez préciser votre demande';
    }
    if(count($errors)>0) { ?>
        <div>
            <?php foreach($errors as $error): ?>
                <p><?= $error . '<br>' ?></p>
            <?php endforeach; ?>
        </div> <?php
    }
    if(empty($errors)) { ?>
<div>
    <p>Merci <?= $_POST['first_name'] . ' ' . $_POST['last_name'] ?> de nous avoir contacté à propos de <?= $_POST['user_topic']?>.</p>

    <p>Un de nos conseillers vous contactera soit à l’adresse <?= $_POST['user_email']?> ou par téléphone au <?= $_POST['user_phone']?> dans les plus brefs délais pour traiter votre demande : <?= '<br><br>' . $_POST['user_message']?>
</div> <?php
    }
}
?>



