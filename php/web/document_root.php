<?php 
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$URL_ROOT = "/";

function isThisBETA(){
$FOLDER_NAME = $_SERVER['REQUEST_URI'];
	if(strpos($FOLDER_NAME, "beta") !== FALSE){
		return TRUE;
	}
}

if(isThisBETA()){
	$DOCUMENT_ROOT = $DOCUMENT_ROOT . "/beta";
	$URL_ROOT = "/beta/";
}
?>