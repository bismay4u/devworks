<?php

?>
<link rel="stylesheet" href="../css/jquery/jquery.ui.smoothness.css" type="text/css" title="ui-theme">
<script type="text/javascript" src="../js/jquery.js"></script>
<style>
html,body {
	margin: 0px;padding: 0px;
	width: 100%;height: 100%;
	text-align: center;
}
.hidden {

}
.left {}
.right {}
.ajaxloading {
	background: url(../css/images/loading.gif) no-repeat center center;
}
.box {
	width: 400px;height: auto;
	min-height: 180px;
	margin: auto;margin-top: 20px;margin-left: 20px;
	border: 1px solid #CCC;
	box-shadow: 10px 10px 5px #888888;
	display: inline-block;
	text-align: left;

	font: 75% "Lucida Grande", "Trebuchet MS", Verdana, sans-serif;

	overflow: hidden;
}
.box:first-child {
	margin-top: 20px;
}
.box h3 {
	margin:0px;margin-bottom: 10px;
	border-bottom: 1px dashed #AAA;
	font-size: 1.4em;
	font-weight: bold;
}
.box label {
	width:96%;height: 22px;
	display: inline-block;
	padding: 4px;padding-left: 10px;
}
.box label input[type=text],.box label input[type=password],.box label input[type=file] {
	width: 300px;height: 24px;
	float: right;margin-right: 10px;
	border:1px solid #AAA;
	padding: 4px;
}
.box label input[type=file] {
	padding:0px;
}
button {
	padding: 10px;
	padding-left: 20px;padding-right: 20px;
	cursor: pointer;
}
button:hover {
	opacity: 0.5;
}
#dataDiv {
	width: 100%;min-height: 200px;
	display: none;
}
#msgErr {
	color: maroon;
	display: none;
}
</style>
<div id='formDiv'>
	<form action="../ajax/visual_sitetree" method="post" enctype="multipart/form-data" 
		target="_blank" onsubmit="return checkForm()">
	<div class='box'>
		<h3>Sitemap Connection</h3>
		<label>URL
			<input type=text name='sitemap_url' value='' placeholder='http://' />
		</label>
		<div align=center><br/><b>OR</b><br/><br/></div>
		<label>FILE
			<input type=file name='sitemap_file' value='' />
		</label>
	</div>
	<br/><br/>
	<div align=center>
		<button class='ui-widget-header ui-widget-button' type='submit'>Generate Tree</button>
	</div>
	</form>
	<div id='msgErr' align=center>
		
	</div>
</div>
<iframe id='targetFrame' name='targetFrame' style='display:none'></iframe>
<div id='dataDiv' class='ajaxloading'>
	<br/><br/>
	<div align=center>
		<button class='ui-widget-header ui-widget-button' onclick='resetForm()'>Back</button>
	</div>
</div>
<script>
$(function() {
});
function checkForm() {
	$("#dataDiv").html("");
	$("#msgErr").html("").fadeOut();

	q=[];
	cnt=0;
	$("#formDiv").find("input[name],textarea[name],select[name]").each(function() {
		cnt++;
		if($(this).val()!=null && $(this).val().length>0) {
			q.push($(this).attr("name")+"="+encodeURIComponent($(this).val()));
		}
	});
	$("#formDiv").find("input[type=password]").val("");
	if(q.length<=0) {
		$("#msgErr").html("<h3 align=center>Please fill atleast one of the fields to proceed.</h3>").fadeIn(300).delay(800).slideUp(300);
		return;
	}
	$("#formDiv").slideUp();
	$("#dataDiv").addClass("ajaxloading").slideDown();

	//$.post("../ajax/visual_sitetree",q.join("&"),function(response, status, xhr) {});
	//html="<br/><br/><div align=center>";
	//html+="<button class='ui-widget-header ui-widget-button' onclick='resetForm()'>Back</button></div>";
	//$("#dataDiv").html(response).append(html).removeClass("ajaxloading");
	
	return true;
}
function resetForm() {
	$("#dataDiv").html("");
	$("#dataDiv").slideUp();
	$("#formDiv").slideDown();	
}
</script>
