<?php
define("ROOT",dirname(__FILE__)."/");
include "api.php";

//Security Check
if($_ENV['ajax']['referer_lock']) {
	if(isset($_SERVER['HTTP_REFERER']) && strlen($_SERVER['HTTP_REFERER'])>0) {
		if(strpos($_SERVER['HTTP_REFERER'],HOST)===false) {
			printError("This is Locked Resource :-(");
		}
	} else {
		printError("This is Locked Resource :-(");
	}
}

if(!isset($_REQUEST['cmd'])) {
	$xxx=$_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'];
	$ooo=dirname(__FILE__)."/cmds/";
	$xxx=substr($xxx,strlen($ooo));
	$xxx=urldecode($xxx);
	$xxx=current(explode("?",$xxx));
	if($xxx=="/") $xxx="";
	if(strlen($xxx)>0) {
		$_REQUEST['cmd']=$xxx;
	}
}

//print_r($_GET);
//print_r($_POST);
//print_r($_SERVER);

if(isset($_REQUEST['cmd'])) {
	$cmd=str_replace(".","/",$_REQUEST['cmd']);
	$cmd=str_replace("/","",$cmd);
	$cmdPath=dirname(__FILE__)."/cmds/{$cmd}.php";
	if(file_exists($cmdPath)) {
		include $cmdPath;
	} else {
		printError("Command Not Found :-(");
	}
} else {
	printError("Command Not Defined :-(");
}
?>
