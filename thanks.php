<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

Merci <?php echo $_GET ["user_name"] . " " ; ?><?php echo $_GET ["user_firstname"] . " ";?> de nous avoir contacté à propos de <?php echo $_GET[ "user_subject"] . " "; ?>.

Un de nos conseiller vous contactera soit à l’adresse <?php echo $_GET["user_mail"] . " " ; ?> ou par téléphone au <?php echo $_GET ["user_tel"] . " " ; ?> dans les plus brefs délais pour traiter votre demande : 

<?php echo $_GET ["user_message"]; ?>
    
</body>
</html>
