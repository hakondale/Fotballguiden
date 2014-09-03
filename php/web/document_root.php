<?php 
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$URL_ROOT = "/";


if ($DOCUMENT_ROOT === "/customers/6/6/c/fotballguiden.nu/httpd.www"){
	$URL_ROOT = "http://fotballguiden.nu/";
}

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