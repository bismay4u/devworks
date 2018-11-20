<?php
//$url="http://petalsplash.com/devlogiks/services?scmd=ping";
//$url="http://www.hopshopdrop.com/";
//$url="http://192.168.1.10/monitor/test.php";
//$url="http://192.168.1.11/syjeShop/";
//"http://www.pgneet.com/";
//$get=array("scmd"=>"ping");
//$post=array("a"=>"b","c"=>"d");
//$files=array("test"=>"/var/www/monitor/hello.txt");
//$curlOpts=array("CURLOPT_RETURNTRANSFER"=>1);

$tempDir=dirname(__FILE__)."/tmp/";

$q="";
if(isset($_GET["q"])) $q=$_GET["q"];
?>
<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Find Website/Domain IP v1.0</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<style>
body {
    margin:0px;padding:0px;
    background:#8aa8ca;
    
    
    -moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5);
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5);
    
    font-size: 16px;
    font-family: Arial, Helvetica, Sans-serif;
}
input[type=text] {
	margin:auto;margin-top:30px;
	border:2px solid #CCC;
	width:500px;height:25px;
	
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	
	-moz-box-shadow: inset 0 0 15px #abceee;
	-webkit-box-shadow: inset 0 0 15px #abceee;
	-o-box-shadow: inset 0 0 15px #abceee;
	box-shadow: inset 0 0 15px #abceee;
}
button {
	width:100px;height:25px;
	font-weight:bold;
	
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
}
</style>
</head>
<body>
<div align=center>
	<form method=get action=''>
		<input name=q type=text value='<?=$q?>'>
		<button>Find</button>
	</form>
</div>
<hr/>
<div align=center>
<?php
	if(!isset($_GET["q"])) {
		exit("Sorry, No Query URL Menitioned ...");
	}
	$url=$_GET["q"];
	$url=str_replace("http://","",$url);
	$url=str_replace("https://","",$url);
	$url=str_replace("ftp://","",$url);
	$hostName=gethostbyname($url);
	$hostAddr=gethostbyaddr($hostName);
	$dns=dns_get_record($url);
	
	//print_r($dns);
?>
<table width=600px border=0 cellpadding=0 cellspacing=0 style=''>
	<tr><th width=190px align=left>Host Name</th><th width=30px></th><td><a target=_blank href='http://<?=$url?>'><?=$url?></a></td></tr>
	<tr><th width=190px align=left>IP Address</th><th width=30px></th><td><?=$hostName?></td></tr>
	<tr><th width=190px align=left>Reverse Lookup Name</th><th width=30px></th><td><?=$hostAddr?></td></tr>
	<tr><th width=190px align=left>DNS Class</th><th width=30px></th><td><?=$dns[0]['class']?></td></tr>
</table>
<br/>
<table width=600px border=0 cellpadding=0 cellspacing=0 style='border:2px solid #FFF;padding:7px;'>
	<thead>
		<tr><th colspan=10 style='color:#FFF;font-size:18px;'>DNS Details <hr/</th></tr>
	</thead>
	<tbody>
	<?php 
	unset($dns[0]);
	foreach($dns as $d) { ?>
	<tr><th width=150px align=left>DNS Host</th><th width=30px></th><td><?=$d['host']?></td></tr>
	<tr><th width=150px align=left>DNS Type</th><th width=30px></th><td><?=$d['type']?></td></tr>
	<tr><th width=150px align=left>DNS Target</th><th width=30px></th><td><?=$d['target']?></td></tr>
	<tr><th width=150px align=left>DNS Class</th><th width=30px></th><td><?=$d['class']?></td></tr>
	<tr><th width=150px align=left>DNS TTL</th><th width=30px></th><td><?=$d['ttl']?></td></tr>
	<tr><td colspan=10><hr/></td></tr>
	<?php } ?>
	</tbody>
</table>
</div>
</body>
</html>
