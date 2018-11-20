<?php
$arrAlgos=array(
		"md5"=>"",
		"sha1"=>"",
		"base64"=>"",
	);
if(isset($_POST["txt"]) && isset($_POST["hash"])) {
	if(strlen($_POST["txt"])>0) {
		switch($_POST["hash"]) {
			case "sha1":
				$hash=md5($_POST["txt"]);
			break;
			case "md5":
				$hash=md5($_POST["txt"]);
			break;
			case "base64":
				$hash=base64_encode($_POST["txt"]);
			break;
			default:
				$hash="Unknown Hash Algorithm";
			break;
		}
	} else {
		$hash="No Data To Hash";
	}
	$_POST["hash"]=strtoupper($_POST["hash"]);
	echo "<h1 align=center>{$_POST["hash"]}#{$_POST["txt"]}</h1>";
	echo "<h2 align=center>$hash</h2>";
	echo "<h3 align=center><a href='".getPluginLink('hash_generator')."'>Show Form</a></h3>";
	exit();
}
?>
<style>
.wrapper {
	width:800px;height:auto;
	border:1px solid #aaa;
	margin:auto;
}
.header {
	width:800px;height:25px;
	border-bottom:2px solid #aaa;
	font-size:1.5em;
	text-align:center;
	color:#333;
}
.content ul,.content li {
	list-style:none;
}
.content input[type=text],.content select {
	width:90%;height:24px;
	margin-left:30px;
}
.content input[type=text] {
	border:1px solid #aaa;
}
.content .bar {
	text-align:center;
}
</style>
<div class='wrapper' style="margin-top: 40px;">
	<h1 class='header'>Text Hasher</h1>
	<div class='content' style='padding:40px;'>
		<form class='form-horizontal' method=post action='' onsubmit=''>
      <div class="form-group">
        <label for="exampleInputEmail1">Text To Hash</label>
        <input id='exampleInputEmail1' type="text" class="form-control" name="txt" placeholder="Text To Hash">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail2">Hash Algorithm</label>
        <select id='exampleInputEmail2' class="form-control select" name='hash'>
						<?php
							foreach($arrAlgos as $a=>$b) {
								echo "<option value='$a'>".strtoupper($a)."</option>";
							}
						?>
					</select>
      </div>
			<div class=bar>
				<button type=reset class='btn btn-danger' >Reset</button>
				<button type=submit class='btn btn-primary'>Submit</button>
			</div>
		</form>
	</div>
</div>
