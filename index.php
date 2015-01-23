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

$youtubeObject = new Zend_Gdata_YouTube();
$video = $youtubeObject->getVideoEntry($idVideo);
$title = $video->getVideoTitle();
$description = $video->getVideoDescription();
$youtubeObject = new Zend_Gdata_YouTube();
// On utilise la version 2 de l’API Youtube
$youtubeObject->setMajorProtocolVersion(2);
$query = $youtubeObject->newVideoQuery();
$query->setVideoQuery('mti') ;
$query->setOrderBy('viewCount') ;
$query->setMaxResults(5) ;
$urlQuery = $query->getQueryUrl(2) ;
$videosFeed = $youtubeObject->getVideoFeed($urlQuery);
foreach ($videoFeed as $video) {
echo 'title : ' . $video->getVideoTitle() ;
echo 'description : ' . $video->getVideoDescription() ;
}
$authenticationURL = 'https://www.google.com/youtube/accounts/ClientLogin';
$httpClient = Zend_Gdata_ClientLogin::getHttpClient(
$usernameYoutube, $passwordYoutube, 'youtube', null, $applicationId, null, null, $authenticationURL
);
$youtubeObject = new Zend_Gdata_YouTube($httpClient, $applicationId, $clientId, $developerKey);
$myVideoEntry = new Zend_Gdata_YouTube_VideoEntry();
/* Exemple : $filesource = $youtubeObject->newMediaFileSource('/data/video.avi'); */
$filesource = $youtubeObject->newMediaFileSource(VIDEO_PATH);
$filesource->setContentType(CONTENT_TYPE);
$myVideoEntry->setMediaSource($filesource);
$myVideoEntry->setVideoTitle('My video title');
$myVideoEntry->setVideoCategory(CATEGORY_VIDEO);
/* Le reste est facultatif */
$myVideoEntry->setVideoDescription('My video description');
$myVideoEntry->setVideoTags(array('tag1, tag2, tag3'));
$uploadUrl = 'http://uploads.gdata.youtube.com/feeds/users/default/uploads';
$youtubeObject->insertEntry($myVideoEntry, $uploadUrl, 'Zend_Gdata_YouTube_VideoEntry');
$authenticationURL = 'https://www.google.com/youtube/accounts/ClientLogin';
$httpClient = Zend_Gdata_ClientLogin::getHttpClient(
$usernameYoutube, $passwordYoutube, 'youtube', null, $applicationId, null, null, $authenticationURL);
$youtubeObject = new Zend_Gdata_YouTube($httpClient, $applicationId, $clientId, $developerKey);
$myVideoEntry = new Zend_Gdata_YouTube_VideoEntry();
$myVideoEntry->setVideoTitle('My video title');
$myVideoEntry->setVideoDescription('My video description');
$myVideoEntry->setVideoCategory(CATEGORY_VIDEO);
$tokenGetUrl = 'http://gdata.youtube.com/action/GetUploadToken';
$token = $youtubeObject->getFormUploadToken($myVideoEntry, $tokenGetUrl);
$tokenValue = $token['token'];
$postUrl = $token['url'];
$nextUrl = 'https://www.youtube.com/upload';
        $form = '<form action="' . $postUrl . '?nexturl=' . $nextUrl .'"> method="post"
enctype="multipart/form-data">
<input name="file" type="file" />
<input name="token" type="hidden" value="' . $tokenValue . '" />
<button class="ui-corner-all sendVideo">Envoyer la vidéo</button>
</form> ';
// Page sur laquelle sera renvoyé l'utilisateur après la validation 
// du formulaire (URL de retour)
/*$nextUrl = 'https://www.youtube.com/';

// Affichage du formulaire
$form = '<form action="'. htmlspecialchars ($postUrl, ENT_QUOTES) .'?nexturl='
. urlencode ($nextUrl) . ' method="post" enctype="multipart/formdata">
Fichier vidéo : <input name="file" type="file"/>
<input name="token" type="hidden" value="'. $tokenValue .'"/>
<input value="Envoyer la vidéo" type="submit" />
</form>';*/

echo  $form;

?> 
    </body>
</html>
