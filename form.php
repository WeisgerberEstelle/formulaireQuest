
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>My test page</title>
    <style>form {
  /* Uniquement centrer le formulaire sur la page */
  margin: 0 auto;
  width: 400px;
  /* Encadré pour voir les limites du formulaire */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input, textarea {
  /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
  font: 1em sans-serif;

  /* Pour que tous les champs texte aient la même dimension */
  width: 300px;
  box-sizing: border-box;

  /* Pour harmoniser le look & feel des bordures des champs texte */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}

textarea {
  /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
  vertical-align: top;

  /* Pour donner assez de place pour écrire du texte */
  height: 5em;
}

.button {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 90px; /* même taille que les étiquettes */
}

button {
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: .5em;
}

  </style>  
  </head>
  <body>
    <p>This is my page</p>

    <form action="thanks.php" method="post">
        <div>
            <label for="name"> Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="firstname"> Prénom :</label>
            <input type="text" id="firstname" name="user_firstname">
        </div>
        <div>
          <label for="tel"> Téléphone:</label>
          <input type="tel" id="tel" name="user_tel">
        </div>
        <div>
            <label for="mail"> e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
          <label for="subject"> Choisir le sujet de votre message :</label>
          <select id="subject" name="user_subject">
            <option value="une question">Une question</option>
            <option value="Réclamation">Réclamation</option>
            <option value="Demande de rdv">Demande de rdv</option>
          </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="message" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
     
    </form>
  
  </body>
</html>
