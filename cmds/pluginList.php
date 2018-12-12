<?php
if(!defined("ROOT")) exit("OOPS..., Direct Access Not Allowed :-(");

$fs=scandir(ROOT."plugins/");
unset($fs[0]);unset($fs[1]);
if(count($_ENV['secure']['ip_plugins'])<=0) {
	$_ENV['secure']['ip_plugins']=array();
}
asort($fs);
$arrOut=array();
foreach($fs as $f) {
  if(substr($f,0,1)==".") continue;
	if(is_dir(ROOT."plugins/{$f}/")) {
		$title=ucwords(str_replace("_"," ",$f));
		$category="Default";
		$titleArr=explode("-", $title);
		if(count($titleArr)>1) {
			$category=$titleArr[0];
			unset($titleArr[0]);
			$title=implode("-", $titleArr);
			$title=ucwords($title);
		}
		if(is_file(ROOT."plugins/{$f}/index.php") && !in_array($f,$_ENV['others']['No Load Plugins'])) {
			if(array_key_exists($f,$_ENV['secure']['ip_plugins'])) {
				$ip=$_ENV['secure']['ip_plugins'][$f];
				$cip=$_SERVER['REMOTE_ADDR'];
				if(strpos($cip,$ip)===false) {
					continue;
				}
				$arrOut[$category][]="<li><a href='plugin/$f' target='toolFrame'>$title</a></li>";
			} else {
				$arrOut[$category][]="<li><a href='plugin/$f' target='toolFrame'>$title</a></li>";
			}
		}
	} else {
		$f=substr($f,0,strlen($f)-4);
		$title=ucwords(str_replace("_"," ",$f));
		$category="Default";
		$titleArr=explode("-", $title);
		if(count($titleArr)>1) {
			$category=$titleArr[0];
			unset($titleArr[0]);
			$title=implode("-", $titleArr);
			$title=ucwords($title);
		}
		if(is_file(ROOT."plugins/{$f}.php") && !in_array($f,$_ENV['others']['No Load Plugins'])) {
			if(array_key_exists($f,$_ENV['secure']['ip_plugins'])) {
				$ip=$_ENV['secure']['ip_plugins'][$f];
				$cip=$_SERVER['REMOTE_ADDR'];
				if(strpos($cip,$ip)===false) {
					continue;
				}
				$arrOut[$category][]="<li><a href='plugin/$f' target='toolFrame'>$title</a></li>";
			} else {
				$arrOut[$category][]="<li><a href='plugin/$f' target='toolFrame'>$title</a></li>";
			}
		}
	}
}
foreach($arrOut as $key => $subArr) {
	echo "<ul><h3>$key</h3>";
	echo implode("", $subArr);
	echo "</ul>";
}
?>
