<?php
//LoadtheXMLfile
$xml=newDOMDocument();
$xml->load(‘Movie.xml’);
//Getallthemovienodes
$movies=$xml->getElementsByTagName(‘MovieInfo’);
//Loopthrougheachmovienodeandprintthemovietitleandactorname
Foreach($moviesas$movie){
Echo“MovieTitle:“.$movie->getElementsByTagName(‘MovieTitle’)[0]->textContent.“,“;
Echo“ActorName:“.$movie->getElementsByTagName(‘ActorName’)[0]->textContent.“<br>”;
}
?