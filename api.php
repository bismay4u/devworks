<?php
if(!defined("ROOT")) exit("OOPS..., Direct Access Not Allowed :-(");

if(!function_exists("prepareEnviroment")) {
	include ROOT."config.php";
	
	session_start();
  
  function getPluginLink($plugin) {
    return HOST."plugin/".str_replace(".php","",$plugin);
  }
	
	function prepareEnviroment() {
		$hostProtocol="http://";
		if(isset($_SERVER['HTTPS'])) {
			$hostProtocol="https://";
		}
		$xxx=$_SERVER['DOCUMENT_ROOT'];
		$ooo=dirname(__FILE__);
		$host=$hostProtocol.$_SERVER['HTTP_HOST'].substr($ooo,strlen($xxx))."/";
		define("HOST",$host);
	}
	function printObj($obj,$noPrint=false) {
		if($obj==null) return;
		if($noPrint) {
			ob_start();
			echo "<pre>";
			print_r($obj);
			echo "</pre>";
			$data=ob_get_contents();
			ob_clean();
			return $data;
		} else {
			echo "<pre>";
			print_r($obj);
			echo "</pre>";
		}
	}
	function println($line) {
		echo "$line<br/>";
	}
	function printError($errMsg="Error Occured",$errCode=404,$autoExit=true) {
		echo "Error ($errCode) : $errMsg";
		if($autoExit) exit();
	}
	function printWarn($errMsg="Something mischievous occured on server") {
		echo "Warning : $errMsg";
	}
	function getDevice() {
		$device="pc";
		
		return $device;
	}
	prepareEnviroment();
}
?>
