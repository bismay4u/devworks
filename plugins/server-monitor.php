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

$tempDir=ROOT."tmp/";

$q="";
if(isset($_GET["q"])) $q=$_GET["q"];
?>
<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Effective Server Monitor v1.0</title>
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
		<button>Process</button>
	</form>
</div>
<hr/>
<div align=center>
<?php
	if(!isset($_GET["q"])) {
		exit("Sorry, No Query URL Menitioned ...");
	}
	$url=$_GET["q"];
	if(!(strpos($url,"http")===0)) {
		$url="http://".$url;
	}
	
	$fname=getURLName($url)."/".date("Y-M").".csv";//"/".md5($url).
	$dumpFile=$tempDir."monitor/$fname";
	
	$data="";
	$cnt=3;
	$time=0;
	for($i=0;$i<$cnt;$i++) {
		$timeDiff=latencyTest($url);
		$time+=$timeDiff;
	}
	$time=round($time/$cnt,4);

	$data=date("d/m/Y").",".date("H:i:s").",".$time.","."ms\n";
	if(!file_exists($dumpFile)) {
		if(!is_dir($dumpFile)) {
			if(mkdir(dirname($dumpFile),0777,true)) {
				chmod(dirname($dumpFile),0777);
			}
		}
		$data="Date,Time,Latency,Units\n".$data;
		file_put_contents($dumpFile,$data);
	} else {
		$fh=fopen($dumpFile,"a");
		fwrite($fh,$data);
		fclose($fh);
	}
	echo "Successfully Ran Monitor On ".date("d/m/Y H:i:s")." For URL ".$url." For Average Latency Of ".$time."ms Averaged Over $cnt Cycles<br/>";
	echo "<a href='tmp/monitor/$fname'>Save As (CSV Excel File)</a>";
?>
</div>
</body>
</html>
<?php
function latencyTest($url) {
	$time1=microtime();
	$out=curlFetch($url,$get,$post,$files,$curlOpts);
	$time2=microtime();
	$timeDiff=(($time2-$time1)*1000);
	$timeDiff=abs($timeDiff);
	return $timeDiff;
}
function curlFetch($url,$get=array(),$post=array(),$files=array(),$curlOpts=array(),$outFile="") {
	if(!function_exists("curl_init")) {
		die("Sorry, cURL is not installed !");
	}
	if(strpos($url,"?")<=0) {
		$url.="?";
	}
	foreach($get as $a=>$b) {
		$url.="$a=$b&";
	}
	$url=rtrim($url,"&");
	foreach($files as $a=>$b) {
		$post[$a]="@".$b;
	}
	
	$ch=curl_init($url);

	curl_setopt($ch,CURLOPT_HEADER,0);
	curl_setopt($ch,CURLOPT_POST,count($post));
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post);
	//curl_setopt($ch,CURLOPT_HTTPHEADER,array("Content-Type: text/xml"));
	//curl_setopt($ch,CURLOPT_REFERER,"http://example.com/test.php");
	curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/1.0");
	
	if(strlen($outFile)>0 && is_writable($outFile))
		curl_setopt($ch,CURLOPT_FILE,fopen($outFile,"w")); //Write Output To File
	
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_TIMEOUT,10);
	
	if($curlOpts!=null) {
		foreach($curlOpts as $a=>$b) {
			curl_setopt($ch,constant($a),$b);
		}
	}
	
	$out=curl_exec($ch);
	$info=curl_getinfo($ch);
	curl_close($ch);
	
	return array("reponse"=>$out,"info"=>$info);
}
function printArray($arr) {
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
function getURLName($url) {
	$fname=parse_url($url);
	$fname=$fname["host"];
	//$fname=str_replace("www.","",$fname);
	/*$fname=str_replace(".com","",$fname);
	$fname=str_replace(".net","",$fname);
	$fname=str_replace(".org","",$fname);
	$fname=str_replace(".co","",$fname);
	$fname=str_replace(".in","",$fname);*/
	return $fname;
}
?>
