<header class="main-header">
<!-- Logo -->
<a href="<?=HOST?>" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>D</b>W</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg">
    <img src="assets/img/logo.png" class="img-circle" style='width: 25px;height: 25px;margin-right: 5px;'>
    <b>DEV</b>Works
  </span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
  	<span class="sr-only">Toggle navigation</span>
  </a>
  
  <ul class="nav navbar-nav pull-left">
    <li><a href="<?=getPluginLink("upload")?>" target="targetFrame"><i class="fa fa-upload"></i> Upload</a></li>
  </ul>

  <div class="navbar-custom-menu">
	  <ul class="nav navbar-nav pull-right">
      
	  </ul>
	  <!-- search form -->
      <form action="#" method="get" class="sidebar-form hidden">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
  </div>
</nav>
</header>
