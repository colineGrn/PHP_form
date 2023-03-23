<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My first form with PHP</title>
</head>
<body>
<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" required id="nom" name="last_name">
    </div>
    <div>
        <label for="prénom">Prénom :</label>
        <input type="text" required id="prénom" name="first_name">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" required id="courriel" name="user_email">
    </div>
    <div>
        <label for="telephone">Téléphone :</label>
        <input type="tel" required id="telephone" name="user_phone">
    </div>
    <div>
        <label for="sujet">Sujet :</label>
        <select id="sujet" name="user_topic">
            <option value="question">J'ai une question</option>
            <option value="dysfonctionnement">Mon produit ne fonctionne pas</option>
            <option value="remboursement">Je veux me faire rembourser</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" required name="user_message" rows="5" cols="33"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>

</body>
</html>



