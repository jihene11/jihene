<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>jihene smaya  /TWITTER Search</title>
    </head>
    <body>
        <label> Search:
            <form action="" method="post">
                
                <input id=bt_submit type=submit value=connecter name=bt_submit>
             
            
        </form>
     

<?php


/*require_once  'library/ZendGdata/YouTube.php'; // on charge la librairie YouTube

// fonction permettant d'afficher les informations sur une vidéo
function  printVideoEntry($videoEntry)
{
    echo  'Titre : ' . $videoEntry->getVideoTitle() . "<br />\n";  
    echo  'Description: ' . $videoEntry->getVideoDescription() . "<br />\n";
    echo  'Tags: ' . implode (", ", $videoEntry->getVideoTags()) . "<br />\n";
    echo  'URL du player Flash: <a href="'. $videoEntry->getFlashPlayerUrl() .'">' 
    . $videoEntry->getFlashPlayerUrl() . "</a>\n";
}

// fonction permettant d'afficher les vidéos provenant d'un flux
function  printVideoFeed($videoFeed)
{
    $count = 1;
    foreach  ($videoFeed as  $videoEntry) {
        echo  "<p>Vidéo n°" . $count . "<br />\n";
        printVideoEntry($videoEntry);
        echo  "</p> \n";
        $count++;
    }
}

// on lance la recherche sur le mot-clé "sport"
$yt = new  Zend_Gdata_YouTube(); // on crée une nouvelle instance YouTube
$yt->setMajorProtocolVersion(2);
$query = $yt->newVideoQuery();
$query->setOrderBy('viewCount'); // on souhaite classer les vidéos par le nombre de lecture
$query->setTime('this_week'); // on souhaite afficher seulement les vidéos de la semaine passée
$query->setVideoQuery('sport'); // on définit le mot-clé

// on récupère un flux XML avec la liste des vidéos
$videoFeed = $yt->getVideoFeed($query->getQueryUrl(2));

// on affiche les vidéos 
printVideoFeed($videoFeed); */

// Page sur laquelle sera renvoyé l'utilisateur après la validation 
// du formulaire (URL de retour)
$nextUrl = 'http://www.monsiteweb.com/upload_video_ok.php';

// Affichage du formulaire
$form = '<form action="'. htmlspecialchars ($postUrl, ENT_QUOTES) .'?nexturl='
. urlencode ($nextUrl) . ' method="post" enctype="multipart/formdata">
Fichier vidéo : <input name="file" type="file"/>
<input name="token" type="hidden" value="'. $tokenValue .'"/>
<input value="Envoyer la vidéo" type="submit" />
</form>';

echo  $form;

?> 
    </body>
</html>
