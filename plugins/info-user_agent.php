<?php
$userAgent=$_SERVER['HTTP_USER_AGENT'];
$mode="agent";
$jsonData=array();
$f=dirname(__FILE__)."/data/user_agent.json";

if(isset($_POST) && count($_POST)>0) {
	$vArr=array_values($_POST);
	$userAgentHash=md5($userAgent.implode("",$vArr));

	if(file_exists($f)) {
		$fData=file_get_contents($f);
		if(strlen($fData)>2)
			$jsonData=json_decode($fData,true);
	}
	if(!array_key_exists($userAgentHash,$jsonData)) {
		$jsonData[$userAgentHash]=array(
				"Agent"=>$userAgent,
				"Visits"=>1,
			);
	} else {
		$jsonData[$userAgentHash]['visits']=$jsonData[$userAgentHash]['visits']+1;
	}

	$_POST['Last_Visit']=date("Y-m-d H:i:s");

	$dArr=$jsonData[$userAgentHash];
	foreach($_POST as $a=>$b) {
		$dArr[$a]=$b;
	}
	$jsonData[$userAgentHash]=$dArr;
	file_put_contents($f,json_encode($jsonData));
	exit("Thank You, For Visiting Us.");
} elseif(isset($_GET) && isset($_GET['views'])) {
	if(file_exists($f)) {
		$fData=file_get_contents($f);
		if(strlen($fData)>2)
			$jsonData=json_decode($fData,true);
	}
	$mode="views";
}

?>
<style>
th {
		text-align:left;width:100px;
}
tr th,tr td {
	border-bottom:1px solid #aaa;
}
</style>
<div style='margin-top:20px;'>
<table border=0px width=800px cellpadding=2px cellspacing=0 style='margin:auto;'>
<?php if($mode=="agent") { ?>
	<tr valign=top>
		<th>User Agent</th><td><?=$userAgent?></td>
	</tr>
	<tr valign=top>
		<th>Screen Size</th><td id=screenSize></td>
	</tr>
	<tr valign=top>
		<th>Geolocation</th><td id=geolocation></td>
	</tr>
<?php } else {
	echo "<tr><th colspan=10>Browser Mobility And Screen Analysis</th></tr>";
	$cnt=1;
	foreach($jsonData as $a=>$b) {
		echo "<tr id='$a'><th style='width:30px;text-align:center;'>$cnt</th><td>{$b['Agent']}</td><td width=110px>{$b['screenSize']}</td><td width=150px>{$b['Last_Visit']}</td><td width=30px align=center>{$b['visits']}</td></tr>";
		$cnt++;
	}
} ?>
</table>
</div>
<script>
$(function() {
<?php if($mode=="agent") { ?>
	screenSize=$(window).width()+"x"+$(window).height()+" px";
	$("#screenSize").html(screenSize);

	q=[];
	q.push("screenSize="+screenSize);
	
	navigator.geolocation.getCurrentPosition(function(geoObj) {
		s=geoObj.coords.latitude+","+geoObj.coords.longitude;
		$("#geolocation").html(s);
	});
return;
	$.post("../user_agent.php",q.join("&"),function(txt) {
			if(txt.length>0) alert(txt);
		});
<?php } else { ?>

<?php } ?>
});
</script>