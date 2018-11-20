<?php
$url="";
if(isset($_POST['sitemap_url']) && strlen($_POST['sitemap_url'])>0) 
	$url=$_POST['sitemap_url'];
elseif(isset($_FILES['sitemap_file']['error']) && $_FILES['sitemap_file']['error']==0) {
	$url=$_FILES['sitemap_file']['tmp_name'];
}
/*echo "File To Read :: $url";*/
 $arr=array();

$xml=simplexml_load_file($url);
/*echo "<pre>";
print_r($xml);
echo "</pre>";*/
$final=array();
$arr1=array();
$nos=0;
foreach($xml->url as $k=>$v){
$dir=str_replace('http://','',$v->loc);

$end=explode('?',$dir);
$dir=$end[0];
$char=substr("$dir", -1); 
if($char=='/'){
$dir = substr_replace($dir ,"",-1);
}
$arr=explode('/',$dir);
array_push($final,$arr);
if(count($arr)>$nos){
$nos=count($arr);
}
} 

$input = array_map("unserialize", array_unique(array_map("serialize", $final)));
foreach ($input as $item) {
foreach($item as $k=>$v){
	
}

}

echo "<pre>";
print_r($input);
echo "</pre>";	
?>