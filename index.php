<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>jihene smaya Youtube</title>
    </head>
    <body>

<?php
// Page sur laquelle sera renvoyé l'utilisateur après la validation 
// du formulaire (URL de retour)
$nextUrl = 'http://gdata.youtube.com/action/GetUploadToken';
$postUrl = 'http://gdata.youtube.com/action/GetUploadToken';
// Affichage du formulaire
$form = '<form action="'. htmlspecialchars($postUrl, ENT_QUOTES) .'?nexturl='
. urlencode($nextUrl) . ' method="post" enctype="multipart/formdata">
Fichier vidéo : <input name="file" type="file"/>
<input name="token" type="hidden" value="'. $tokenValue .'"/>
<input value="Envoyer la vidéo" type="submit" />
</form>';

echo $form;

?>
    </body>
</html>
