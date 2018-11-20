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
	min-height: 200px;
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
.box label input[type=text],.box label input[type=password] {
	width: 300px;height: 22px;
	float: right;margin-right: 10px;
	border:1px solid #AAA;
	padding: 4px;
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
	<div class='box'>
		<h3>Database Connection 1</h3>
		<label>Host
			<input type=text name='db1[host]' value='localhost' />
		</label>
		<label>Database
			<input type=text name='db1[database]' value='' />
		</label>
		<label>UserID
			<input type=text name='db1[user]' value='' />
		</label>
		<label>Password
			<input type=password name='db1[pwd]' value='' />
		</label>
	</div>
	<div class='box'>
		<h3>Database Connection 2</h3>
		<label>Host
			<input type=text name='db2[host]' value='localhost' />
		</label>
		<label>Database
			<input type=text name='db2[database]' value='' />
		</label>
		<label>UserID
			<input type=text name='db2[user]' value='' />
		</label>
		<label>Password
			<input type=password name='db2[pwd]' value='' />
		</label>
	</div>
	<br/><br/>
	<div align=center>
		<button class='ui-widget-header ui-widget-button' onclick='diffDB()'>DIFF</button>
	</div>
	<div id='msgErr' align=center>
		
	</div>
</div>
<div id='dataDiv' class='ajaxloading'>
	<br/><br/>
	<div align=center>
		<button class='ui-widget-header ui-widget-button' onclick='resetForm()'>Back</button>
	</div>
</div>
<script>
$(function() {
});
function diffDB() {
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
	if(q.length<cnt) {
		$("#msgErr").html("<h3 align=center>Please fill all the fields to proceed.</h3>").fadeIn(300).delay(800).slideUp(300);
		//return;
	}
	$("#formDiv").slideUp();
	$("#dataDiv").addClass("ajaxloading").slideDown();

	$.post("../ajax/db_diff",q.join("&"),function(response, status, xhr) {
				html="<br/><br/><div align=center>";
				html+="<button class='ui-widget-header ui-widget-button' onclick='resetForm()'>Back</button></div>";
				$("#dataDiv").html(response).append(html).removeClass("ajaxloading");
			});
}
function resetForm() {
	$("#dataDiv").html("");
	$("#dataDiv").slideUp();
	$("#formDiv").slideDown();	
}
</script>