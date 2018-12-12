<?php
define("ROOT",dirname(__FILE__)."/");
include "api.php";

if(!isset($_GET['plugin'])) {
  $URI = basename($_SERVER['REQUEST_URI']);
  
  if($URI!=null && strlen($URI)>1 && !in_array($URI,["plugin"]))
    $_GET['plugin'] = $URI;
  else
    $_GET['plugin'] = "welcome";
}

$xxx=$_GET['plugin'];
$xxx = current(explode("?",$xxx));

if(count($_ENV['secure']['ip_plugins'])>0 && array_key_exists($xxx,$_ENV['secure']['ip_plugins'])) {
	$ip=$_ENV['secure']['ip_plugins'][$xxx];
	$cip=$_SERVER['REMOTE_ADDR'];
	if(strpos($cip,$ip)===false) {
		printError("This is Locked Resource :-(");
	}
}
if(strlen($xxx)>0) {
	$ext=explode(".",$xxx);
	if(count($ext)>1) {
		$pluginArr=array(
			"plugins/{$xxx}"
		);
	}
	else {
		$pluginArr=array(
			"plugins/{$xxx}.php",
      "plugins/{$xxx}/index.php"
		);
	}

	$loaded=false;
	foreach($pluginArr as $a) {
		if(file_exists(ROOT.$a)) {
      printPluginHTML($a);
			$loaded=true;
			break;
		}
	}
	if(!$loaded) {
		printError("Plugin '{$xxx}' Not Found :-(");
	}
} else {
	printError("Plugin Not Defined :-(");
}

function printPluginHTML($file) {
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
	  <meta charset="utf-8">
	  <title>Plugin : <?=ucwords(str_replace("_"," ",basename($file)))?></title>
    
    <meta http-equiv="cleartype" content="on" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, width=device-width">
    
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
  <?php
  include ROOT.$file;
  ?>

  </body>
  </html>
  <?php
}
?>