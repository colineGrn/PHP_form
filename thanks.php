
<div>
    <p>Merci <?= $_POST['first_name'] . ' ' . $_POST['last_name'] ?> de nous avoir contacté à propos de <?= $_POST['user_topic']?>.</p>

    <p>Un de nos conseillers vous contactera soit à l’adresse <?= $_POST['user_email']?> ou par téléphone au <?= $_POST['user_phone']?> dans les plus brefs délais pour traiter votre demande : <?= '<br><br>' . $_POST['user_message']?>

</div>