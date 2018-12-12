<?php
$menuArr = ["tools"=>[]];

if(count($_ENV['secure']['ip_plugins'])<=0) {
	$_ENV['secure']['ip_plugins']=array();
}

$fs = scandir(ROOT."plugins/");
foreach($fs as $f) {
  if($f=="." || $f==".." || substr($f,0,1)=="." || substr($f,0,1)=="~" || in_array($f,$noShowPlugins)) continue;
  
  $group = "tools";
  $f1 = explode("-",$f);
  if(count($f1)>1) {
    $group = $f1[0];
  }
  $slug = strtolower(str_replace(".php","",$f));
  $t = str_replace("_"," ",str_replace(".php","",$f));
  if(count($f1)>1) {
    $t = str_replace("{$f1[0]}-","",$t);
  }
  $t = ucwords($t);
  
  if(array_key_exists($slug,$_ENV['secure']['ip_plugins']))  {
    $requiredIP = $_ENV['secure']['ip_plugins'][$slug];
    if($_SERVER['REMOTE_ADDR']!=$requiredIP) {
      continue;
    }
  }
  
  $icon = "fa fa-circle-o";
  if(isset($sidebarIcons[$slug])) {
    $icon = $sidebarIcons[$slug];
  }
  
  if(is_dir(ROOT."plugins/{$f}")) {
    $menuArr[$group][] = ["title"=>$t,"file"=>$f,"icon"=>$icon];
  } else {
    $menuArr[$group][] = ["title"=>$t,"file"=>$f,"icon"=>$icon];
  }
}

$fs = scandir(ROOT."uploads/");
foreach($fs as $f) {
  if($f=="." || $f==".." || substr($f,0,1)=="." || substr($f,0,1)=="~") continue;
  $group = "Pending Approval";
  $t = ucwords(str_replace("_"," ",str_replace(".php","",$f)));
  if(is_dir(ROOT."plugins/{$f}")) {
    $menuArr[$group][] = ["title"=>$t,"file"=>$f];
  } else {
    $menuArr[$group][] = ["title"=>$t,"file"=>$f];
  }
}
ksort($menuArr);
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel hidden">
  	<div class="pull-left image">
  	  <img src="assets/img/logo.png" class="img-circle" alt="User Image">
  	</div>
  	<div class="pull-left info">
  	  <p>SmartinfoLogiks</p>
  	  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
  	</div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul id='sidebarTree' class="sidebar-menu" data-widget="tree">
        <?php
          foreach($menuArr as $a=>$b) {
            $icon = "fa fa-folder";
            if(isset($sidebarIcons[$a])) {
              $icon = $sidebarIcons[$a];
            }
            ?>
            <li class="treeview">
            <a href="#">
              <i class="<?=$icon?>"></i> <span><?=ucwords($a)?></span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
            <?php
            foreach($b as $c=>$d) {
              echo "<li><a class='ajaxContent' href='".getPluginLink($d['file'])."' target='targetFrame'><i class='{$d['icon']}'></i> {$d['title']}</a></li>";
            }
            ?>
            </ul>
            </li>
            <?php
          }
        ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<script>
$("#sidebarTree>li.treeview:first-child").addClass("active");
</script>
