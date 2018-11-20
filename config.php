<?php
if(!defined("ROOT")) exit("OOPS..., Direct Access Not Allowed :-(");

if(defined("ROOT")) {
	
	define("APPTITLE","DevWorks");
	define("APPVERS","1.0");
	define("APPCOPYRIGHT","Copyright &copy; 2017 <a href='http://smartinfologiks.com'>Smartinfo Logiks</a>.");
	
	$arrSidebar=[
			"dashboard"=>["title"=>"Dashboard","icon"=>"<i class='fa fa-dashboard'></i>","target"=>"_blank"]
		];
  
  $noShowPlugins = [
    "upload.php",
    "welcome.php",
  ];
  
  $sidebarIcons = [
    //"general" => "fa fa-dashboard"
    
    //"hash_generator"=>"fa fa-hash"
  ];
	
	//AJAX Properties
	$_ENV['ajax']['referer_lock']=true;
	
	//Plugins Properties
	$_ENV['plugins']['referer_lock']=true;
	
	//Security Properties
	$_ENV['secure']['ip_plugins']=array(
			"pshell"=>"192.168.0.100",
			"db_diff"=>"192.168.0.100"
		);
}
?>
