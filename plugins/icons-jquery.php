<link rel="stylesheet" href="../bower_components/jquery-ui/themes/smoothness/jquery-ui.css" type="text/css" title="ui-theme">

<style type="text/css">
	body {font-size: 62.5%; margin: 20px; font-family: Verdana, sans-serif; color: #444;}
	h1 {font-size: 1.5em; margin: 1em 0;}
	h2 {font-size: 1.3em; margin: 2em 0 .5em;}
	h2 a {font-size: .8em;}
	p {font-size: 1.2em; }
	ul {margin: 0; padding: 0;}
	li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
	span.ui-icon {float: left; margin: 0 4px;}
	span.text {float: left; width: 180px;}
	
	.iconsToggler {
		float:right;margin-top:-10px;
	}
	.iconsToggler a {
		text-decoration:none;
		color:#444;
		line-height:22px;
	}
	.iconsToggler a:hover {
		text-decoration:underline;
	}
</style>

<script type="text/javascript">
	$(function(){
		$('.ui-state-default').hover(
			function(){ $(this).addClass('ui-state-hover'); }, 
			function(){ $(this).removeClass('ui-state-hover'); }
		);
		$('.ui-state-default').click(function(){ $(this).toggleClass('ui-state-active'); });
		$('.iconsToggler').append('<a href="#">Toggle text</a>').find('a').click(function(){ 
			$('.icon-collection li span.text').toggle(); 
			return false; 
		});
		$('.icon-collection .iconBtn').click(function(e) {
				$(".iconsTitle").html($(this).text());
			});
	});
</script>

<p class="iconsToggler"></p>
<p class="iconsTitle">Click Icon To View Its Name</p>
<ul class="ui-widget icon-collection">
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-carat-1-n"><span class="ui-icon ui-icon-carat-1-n"></span><span class="text" style="display: none;">.ui-icon-carat-1-n</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-carat-1-ne"><span class="ui-icon ui-icon-carat-1-ne"></span><span class="text" style="display: none;">.ui-icon-carat-1-ne</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-carat-1-e"><span class="ui-icon ui-icon-carat-1-e"></span><span class="text" style="display: none;">.ui-icon-carat-1-e</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-carat-1-se"><span class="ui-icon ui-icon-carat-1-se"></span><span class="text" style="display: none;">.ui-icon-carat-1-se</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-carat-1-s"><span class="ui-icon ui-icon-carat-1-s"></span><span class="text" style="display: none;">.ui-icon-carat-1-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-carat-1-sw"><span class="ui-icon ui-icon-carat-1-sw"></span><span class="text" style="display: none;">.ui-icon-carat-1-sw</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-carat-1-w"><span class="ui-icon ui-icon-carat-1-w"></span><span class="text" style="display: none;">.ui-icon-carat-1-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-carat-1-nw"><span class="ui-icon ui-icon-carat-1-nw"></span><span class="text" style="display: none;">.ui-icon-carat-1-nw</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-carat-2-n-s"><span class="ui-icon ui-icon-carat-2-n-s"></span><span class="text" style="display: none;">.ui-icon-carat-2-n-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-carat-2-e-w"><span class="ui-icon ui-icon-carat-2-e-w"></span><span class="text" style="display: none;">.ui-icon-carat-2-e-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-triangle-1-n"><span class="ui-icon ui-icon-triangle-1-n"></span><span class="text" style="display: none;">.ui-icon-triangle-1-n</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-triangle-1-ne"><span class="ui-icon ui-icon-triangle-1-ne"></span><span class="text" style="display: none;">.ui-icon-triangle-1-ne</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-triangle-1-e"><span class="ui-icon ui-icon-triangle-1-e"></span><span class="text" style="display: none;">.ui-icon-triangle-1-e</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-triangle-1-se"><span class="ui-icon ui-icon-triangle-1-se"></span><span class="text" style="display: none;">.ui-icon-triangle-1-se</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-triangle-1-s"><span class="ui-icon ui-icon-triangle-1-s"></span><span class="text" style="display: none;">.ui-icon-triangle-1-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-triangle-1-sw"><span class="ui-icon ui-icon-triangle-1-sw"></span><span class="text" style="display: none;">.ui-icon-triangle-1-sw</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-triangle-1-w"><span class="ui-icon ui-icon-triangle-1-w"></span><span class="text" style="display: none;">.ui-icon-triangle-1-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-triangle-1-nw"><span class="ui-icon ui-icon-triangle-1-nw"></span><span class="text" style="display: none;">.ui-icon-triangle-1-nw</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-triangle-2-n-s"><span class="ui-icon ui-icon-triangle-2-n-s"></span><span class="text" style="display: none;">.ui-icon-triangle-2-n-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-triangle-2-e-w"><span class="ui-icon ui-icon-triangle-2-e-w"></span><span class="text" style="display: none;">.ui-icon-triangle-2-e-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-1-n"><span class="ui-icon ui-icon-arrow-1-n"></span><span class="text" style="display: none;">.ui-icon-arrow-1-n</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-1-ne"><span class="ui-icon ui-icon-arrow-1-ne"></span><span class="text" style="display: none;">.ui-icon-arrow-1-ne</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-1-e"><span class="ui-icon ui-icon-arrow-1-e"></span><span class="text" style="display: none;">.ui-icon-arrow-1-e</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-1-se"><span class="ui-icon ui-icon-arrow-1-se"></span><span class="text" style="display: none;">.ui-icon-arrow-1-se</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-1-s"><span class="ui-icon ui-icon-arrow-1-s"></span><span class="text" style="display: none;">.ui-icon-arrow-1-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-1-sw"><span class="ui-icon ui-icon-arrow-1-sw"></span><span class="text" style="display: none;">.ui-icon-arrow-1-sw</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-1-w"><span class="ui-icon ui-icon-arrow-1-w"></span><span class="text" style="display: none;">.ui-icon-arrow-1-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-1-nw"><span class="ui-icon ui-icon-arrow-1-nw"></span><span class="text" style="display: none;">.ui-icon-arrow-1-nw</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-2-n-s"><span class="ui-icon ui-icon-arrow-2-n-s"></span><span class="text" style="display: none;">.ui-icon-arrow-2-n-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-2-ne-sw"><span class="ui-icon ui-icon-arrow-2-ne-sw"></span><span class="text" style="display: none;">.ui-icon-arrow-2-ne-sw</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-2-e-w"><span class="ui-icon ui-icon-arrow-2-e-w"></span><span class="text" style="display: none;">.ui-icon-arrow-2-e-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-2-se-nw"><span class="ui-icon ui-icon-arrow-2-se-nw"></span><span class="text" style="display: none;">.ui-icon-arrow-2-se-nw</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowstop-1-n"><span class="ui-icon ui-icon-arrowstop-1-n"></span><span class="text" style="display: none;">.ui-icon-arrowstop-1-n</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowstop-1-e"><span class="ui-icon ui-icon-arrowstop-1-e"></span><span class="text" style="display: none;">.ui-icon-arrowstop-1-e</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowstop-1-s"><span class="ui-icon ui-icon-arrowstop-1-s"></span><span class="text" style="display: none;">.ui-icon-arrowstop-1-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowstop-1-w"><span class="ui-icon ui-icon-arrowstop-1-w"></span><span class="text" style="display: none;">.ui-icon-arrowstop-1-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-1-n"><span class="ui-icon ui-icon-arrowthick-1-n"></span><span class="text" style="display: none;">.ui-icon-arrowthick-1-n</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-1-ne"><span class="ui-icon ui-icon-arrowthick-1-ne"></span><span class="text" style="display: none;">.ui-icon-arrowthick-1-ne</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-1-e"><span class="ui-icon ui-icon-arrowthick-1-e"></span><span class="text" style="display: none;">.ui-icon-arrowthick-1-e</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-1-se"><span class="ui-icon ui-icon-arrowthick-1-se"></span><span class="text" style="display: none;">.ui-icon-arrowthick-1-se</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-1-s"><span class="ui-icon ui-icon-arrowthick-1-s"></span><span class="text" style="display: none;">.ui-icon-arrowthick-1-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-1-sw"><span class="ui-icon ui-icon-arrowthick-1-sw"></span><span class="text" style="display: none;">.ui-icon-arrowthick-1-sw</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-1-w"><span class="ui-icon ui-icon-arrowthick-1-w"></span><span class="text" style="display: none;">.ui-icon-arrowthick-1-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-1-nw"><span class="ui-icon ui-icon-arrowthick-1-nw"></span><span class="text" style="display: none;">.ui-icon-arrowthick-1-nw</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-2-n-s"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><span class="text" style="display: none;">.ui-icon-arrowthick-2-n-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-2-ne-sw"><span class="ui-icon ui-icon-arrowthick-2-ne-sw"></span><span class="text" style="display: none;">.ui-icon-arrowthick-2-ne-sw</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-2-e-w"><span class="ui-icon ui-icon-arrowthick-2-e-w"></span><span class="text" style="display: none;">.ui-icon-arrowthick-2-e-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthick-2-se-nw"><span class="ui-icon ui-icon-arrowthick-2-se-nw"></span><span class="text" style="display: none;">.ui-icon-arrowthick-2-se-nw</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthickstop-1-n"><span class="ui-icon ui-icon-arrowthickstop-1-n"></span><span class="text" style="display: none;">.ui-icon-arrowthickstop-1-n</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthickstop-1-e"><span class="ui-icon ui-icon-arrowthickstop-1-e"></span><span class="text" style="display: none;">.ui-icon-arrowthickstop-1-e</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthickstop-1-s"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span><span class="text" style="display: none;">.ui-icon-arrowthickstop-1-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowthickstop-1-w"><span class="ui-icon ui-icon-arrowthickstop-1-w"></span><span class="text" style="display: none;">.ui-icon-arrowthickstop-1-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowreturnthick-1-w"><span class="ui-icon ui-icon-arrowreturnthick-1-w"></span><span class="text" style="display: none;">.ui-icon-arrowreturnthick-1-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowreturnthick-1-n"><span class="ui-icon ui-icon-arrowreturnthick-1-n"></span><span class="text" style="display: none;">.ui-icon-arrowreturnthick-1-n</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowreturnthick-1-e"><span class="ui-icon ui-icon-arrowreturnthick-1-e"></span><span class="text" style="display: none;">.ui-icon-arrowreturnthick-1-e</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowreturnthick-1-s"><span class="ui-icon ui-icon-arrowreturnthick-1-s"></span><span class="text" style="display: none;">.ui-icon-arrowreturnthick-1-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowreturn-1-w"><span class="ui-icon ui-icon-arrowreturn-1-w"></span><span class="text" style="display: none;">.ui-icon-arrowreturn-1-w</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowreturn-1-n"><span class="ui-icon ui-icon-arrowreturn-1-n"></span><span class="text" style="display: none;">.ui-icon-arrowreturn-1-n</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowreturn-1-e"><span class="ui-icon ui-icon-arrowreturn-1-e"></span><span class="text" style="display: none;">.ui-icon-arrowreturn-1-e</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowreturn-1-s"><span class="ui-icon ui-icon-arrowreturn-1-s"></span><span class="text" style="display: none;">.ui-icon-arrowreturn-1-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowrefresh-1-w"><span class="ui-icon ui-icon-arrowrefresh-1-w"></span><span class="text" style="display: none;">.ui-icon-arrowrefresh-1-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowrefresh-1-n"><span class="ui-icon ui-icon-arrowrefresh-1-n"></span><span class="text" style="display: none;">.ui-icon-arrowrefresh-1-n</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowrefresh-1-e"><span class="ui-icon ui-icon-arrowrefresh-1-e"></span><span class="text" style="display: none;">.ui-icon-arrowrefresh-1-e</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrowrefresh-1-s"><span class="ui-icon ui-icon-arrowrefresh-1-s"></span><span class="text" style="display: none;">.ui-icon-arrowrefresh-1-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-4"><span class="ui-icon ui-icon-arrow-4"></span><span class="text" style="display: none;">.ui-icon-arrow-4</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-arrow-4-diag"><span class="ui-icon ui-icon-arrow-4-diag"></span><span class="text" style="display: none;">.ui-icon-arrow-4-diag</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-extlink"><span class="ui-icon ui-icon-extlink"></span><span class="text" style="display: none;">.ui-icon-extlink</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-newwin"><span class="ui-icon ui-icon-newwin"></span><span class="text" style="display: none;">.ui-icon-newwin</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-refresh"><span class="ui-icon ui-icon-refresh"></span><span class="text" style="display: none;">.ui-icon-refresh</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-shuffle"><span class="ui-icon ui-icon-shuffle"></span><span class="text" style="display: none;">.ui-icon-shuffle</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-transfer-e-w"><span class="ui-icon ui-icon-transfer-e-w"></span><span class="text" style="display: none;">.ui-icon-transfer-e-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-transferthick-e-w"><span class="ui-icon ui-icon-transferthick-e-w"></span><span class="text" style="display: none;">.ui-icon-transferthick-e-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-folder-collapsed"><span class="ui-icon ui-icon-folder-collapsed"></span><span class="text" style="display: none;">.ui-icon-folder-collapsed</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-folder-open"><span class="ui-icon ui-icon-folder-open"></span><span class="text" style="display: none;">.ui-icon-folder-open</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-document"><span class="ui-icon ui-icon-document"></span><span class="text" style="display: none;">.ui-icon-document</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-document-b"><span class="ui-icon ui-icon-document-b"></span><span class="text" style="display: none;">.ui-icon-document-b</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-note"><span class="ui-icon ui-icon-note"></span><span class="text" style="display: none;">.ui-icon-note</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-mail-closed"><span class="ui-icon ui-icon-mail-closed"></span><span class="text" style="display: none;">.ui-icon-mail-closed</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-mail-open"><span class="ui-icon ui-icon-mail-open"></span><span class="text" style="display: none;">.ui-icon-mail-open</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-suitcase"><span class="ui-icon ui-icon-suitcase"></span><span class="text" style="display: none;">.ui-icon-suitcase</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-comment"><span class="ui-icon ui-icon-comment"></span><span class="text" style="display: none;">.ui-icon-comment</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-person"><span class="ui-icon ui-icon-person"></span><span class="text" style="display: none;">.ui-icon-person</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-print"><span class="ui-icon ui-icon-print"></span><span class="text" style="display: none;">.ui-icon-print</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-trash"><span class="ui-icon ui-icon-trash"></span><span class="text" style="display: none;">.ui-icon-trash</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-locked"><span class="ui-icon ui-icon-locked"></span><span class="text" style="display: none;">.ui-icon-locked</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-unlocked"><span class="ui-icon ui-icon-unlocked"></span><span class="text" style="display: none;">.ui-icon-unlocked</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-bookmark"><span class="ui-icon ui-icon-bookmark"></span><span class="text" style="display: none;">.ui-icon-bookmark</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-tag"><span class="ui-icon ui-icon-tag"></span><span class="text" style="display: none;">.ui-icon-tag</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-home"><span class="ui-icon ui-icon-home"></span><span class="text" style="display: none;">.ui-icon-home</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-flag"><span class="ui-icon ui-icon-flag"></span><span class="text" style="display: none;">.ui-icon-flag</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-calculator"><span class="ui-icon ui-icon-calculator"></span><span class="text" style="display: none;">.ui-icon-calculator</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-cart"><span class="ui-icon ui-icon-cart"></span><span class="text" style="display: none;">.ui-icon-cart</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-pencil"><span class="ui-icon ui-icon-pencil"></span><span class="text" style="display: none;">.ui-icon-pencil</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-clock"><span class="ui-icon ui-icon-clock"></span><span class="text" style="display: none;">.ui-icon-clock</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-disk"><span class="ui-icon ui-icon-disk"></span><span class="text" style="display: none;">.ui-icon-disk</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-calendar"><span class="ui-icon ui-icon-calendar"></span><span class="text" style="display: none;">.ui-icon-calendar</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-zoomin"><span class="ui-icon ui-icon-zoomin"></span><span class="text" style="display: none;">.ui-icon-zoomin</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-zoomout"><span class="ui-icon ui-icon-zoomout"></span><span class="text" style="display: none;">.ui-icon-zoomout</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-search"><span class="ui-icon ui-icon-search"></span><span class="text" style="display: none;">.ui-icon-search</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-wrench"><span class="ui-icon ui-icon-wrench"></span><span class="text" style="display: none;">.ui-icon-wrench</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-gear"><span class="ui-icon ui-icon-gear"></span><span class="text" style="display: none;">.ui-icon-gear</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-heart"><span class="ui-icon ui-icon-heart"></span><span class="text" style="display: none;">.ui-icon-heart</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-star"><span class="ui-icon ui-icon-star"></span><span class="text" style="display: none;">.ui-icon-star</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-link"><span class="ui-icon ui-icon-link"></span><span class="text" style="display: none;">.ui-icon-link</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-cancel"><span class="ui-icon ui-icon-cancel"></span><span class="text" style="display: none;">.ui-icon-cancel</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-plus"><span class="ui-icon ui-icon-plus"></span><span class="text" style="display: none;">.ui-icon-plus</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-plusthick"><span class="ui-icon ui-icon-plusthick"></span><span class="text" style="display: none;">.ui-icon-plusthick</span></li>
	<li class="ui-state-default ui-corner-all iconBtn ui-state-hover" title=".ui-icon-minus"><span class="ui-icon ui-icon-minus"></span><span class="text" style="display: none;">.ui-icon-minus</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-minusthick"><span class="ui-icon ui-icon-minusthick"></span><span class="text" style="display: none;">.ui-icon-minusthick</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-close"><span class="ui-icon ui-icon-close"></span><span class="text" style="display: none;">.ui-icon-close</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-closethick"><span class="ui-icon ui-icon-closethick"></span><span class="text" style="display: none;">.ui-icon-closethick</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-key"><span class="ui-icon ui-icon-key"></span><span class="text" style="display: none;">.ui-icon-key</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-lightbulb"><span class="ui-icon ui-icon-lightbulb"></span><span class="text" style="display: none;">.ui-icon-lightbulb</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-scissors"><span class="ui-icon ui-icon-scissors"></span><span class="text" style="display: none;">.ui-icon-scissors</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-clipboard"><span class="ui-icon ui-icon-clipboard"></span><span class="text" style="display: none;">.ui-icon-clipboard</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-copy"><span class="ui-icon ui-icon-copy"></span><span class="text" style="display: none;">.ui-icon-copy</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-contact"><span class="ui-icon ui-icon-contact"></span><span class="text" style="display: none;">.ui-icon-contact</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-image"><span class="ui-icon ui-icon-image"></span><span class="text" style="display: none;">.ui-icon-image</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-video"><span class="ui-icon ui-icon-video"></span><span class="text" style="display: none;">.ui-icon-video</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-alert"><span class="ui-icon ui-icon-alert"></span><span class="text" style="display: none;">.ui-icon-alert</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-info"><span class="ui-icon ui-icon-info"></span><span class="text" style="display: none;">.ui-icon-info</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-notice"><span class="ui-icon ui-icon-notice"></span><span class="text" style="display: none;">.ui-icon-notice</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-help"><span class="ui-icon ui-icon-help"></span><span class="text" style="display: none;">.ui-icon-help</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-check"><span class="ui-icon ui-icon-check"></span><span class="text" style="display: none;">.ui-icon-check</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-bullet"><span class="ui-icon ui-icon-bullet"></span><span class="text" style="display: none;">.ui-icon-bullet</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-radio-off"><span class="ui-icon ui-icon-radio-off"></span><span class="text" style="display: none;">.ui-icon-radio-off</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-radio-on"><span class="ui-icon ui-icon-radio-on"></span><span class="text" style="display: none;">.ui-icon-radio-on</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-play"><span class="ui-icon ui-icon-play"></span><span class="text" style="display: none;">.ui-icon-play</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-pause"><span class="ui-icon ui-icon-pause"></span><span class="text" style="display: none;">.ui-icon-pause</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-seek-next"><span class="ui-icon ui-icon-seek-next"></span><span class="text" style="display: none;">.ui-icon-seek-next</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-seek-prev"><span class="ui-icon ui-icon-seek-prev"></span><span class="text" style="display: none;">.ui-icon-seek-prev</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-seek-end"><span class="ui-icon ui-icon-seek-end"></span><span class="text" style="display: none;">.ui-icon-seek-end</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-seek-first"><span class="ui-icon ui-icon-seek-first"></span><span class="text" style="display: none;">.ui-icon-seek-first</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-stop"><span class="ui-icon ui-icon-stop"></span><span class="text" style="display: none;">.ui-icon-stop</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-eject"><span class="ui-icon ui-icon-eject"></span><span class="text" style="display: none;">.ui-icon-eject</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-volume-off"><span class="ui-icon ui-icon-volume-off"></span><span class="text" style="display: none;">.ui-icon-volume-off</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-volume-on"><span class="ui-icon ui-icon-volume-on"></span><span class="text" style="display: none;">.ui-icon-volume-on</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-power"><span class="ui-icon ui-icon-power"></span><span class="text" style="display: none;">.ui-icon-power</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-signal-diag"><span class="ui-icon ui-icon-signal-diag"></span><span class="text" style="display: none;">.ui-icon-signal-diag</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-signal"><span class="ui-icon ui-icon-signal"></span><span class="text" style="display: none;">.ui-icon-signal</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-battery-0"><span class="ui-icon ui-icon-battery-0"></span><span class="text" style="display: none;">.ui-icon-battery-0</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-battery-1"><span class="ui-icon ui-icon-battery-1"></span><span class="text" style="display: none;">.ui-icon-battery-1</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-battery-2"><span class="ui-icon ui-icon-battery-2"></span><span class="text" style="display: none;">.ui-icon-battery-2</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-battery-3"><span class="ui-icon ui-icon-battery-3"></span><span class="text" style="display: none;">.ui-icon-battery-3</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-plus"><span class="ui-icon ui-icon-circle-plus"></span><span class="text" style="display: none;">.ui-icon-circle-plus</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-minus"><span class="ui-icon ui-icon-circle-minus"></span><span class="text" style="display: none;">.ui-icon-circle-minus</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-close"><span class="ui-icon ui-icon-circle-close"></span><span class="text" style="display: none;">.ui-icon-circle-close</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-triangle-e"><span class="ui-icon ui-icon-circle-triangle-e"></span><span class="text" style="display: none;">.ui-icon-circle-triangle-e</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-triangle-s"><span class="ui-icon ui-icon-circle-triangle-s"></span><span class="text" style="display: none;">.ui-icon-circle-triangle-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-triangle-w"><span class="ui-icon ui-icon-circle-triangle-w"></span><span class="text" style="display: none;">.ui-icon-circle-triangle-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-triangle-n"><span class="ui-icon ui-icon-circle-triangle-n"></span><span class="text" style="display: none;">.ui-icon-circle-triangle-n</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-arrow-e"><span class="ui-icon ui-icon-circle-arrow-e"></span><span class="text" style="display: none;">.ui-icon-circle-arrow-e</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-arrow-s"><span class="ui-icon ui-icon-circle-arrow-s"></span><span class="text" style="display: none;">.ui-icon-circle-arrow-s</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-arrow-w"><span class="ui-icon ui-icon-circle-arrow-w"></span><span class="text" style="display: none;">.ui-icon-circle-arrow-w</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-arrow-n"><span class="ui-icon ui-icon-circle-arrow-n"></span><span class="text" style="display: none;">.ui-icon-circle-arrow-n</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-zoomin"><span class="ui-icon ui-icon-circle-zoomin"></span><span class="text" style="display: none;">.ui-icon-circle-zoomin</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-zoomout"><span class="ui-icon ui-icon-circle-zoomout"></span><span class="text" style="display: none;">.ui-icon-circle-zoomout</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circle-check"><span class="ui-icon ui-icon-circle-check"></span><span class="text" style="display: none;">.ui-icon-circle-check</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circlesmall-plus"><span class="ui-icon ui-icon-circlesmall-plus"></span><span class="text" style="display: none;">.ui-icon-circlesmall-plus</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circlesmall-minus"><span class="ui-icon ui-icon-circlesmall-minus"></span><span class="text" style="display: none;">.ui-icon-circlesmall-minus</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-circlesmall-close"><span class="ui-icon ui-icon-circlesmall-close"></span><span class="text" style="display: none;">.ui-icon-circlesmall-close</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-squaresmall-plus"><span class="ui-icon ui-icon-squaresmall-plus"></span><span class="text" style="display: none;">.ui-icon-squaresmall-plus</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-squaresmall-minus"><span class="ui-icon ui-icon-squaresmall-minus"></span><span class="text" style="display: none;">.ui-icon-squaresmall-minus</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-squaresmall-close"><span class="ui-icon ui-icon-squaresmall-close"></span><span class="text" style="display: none;">.ui-icon-squaresmall-close</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-grip-dotted-vertical"><span class="ui-icon ui-icon-grip-dotted-vertical"></span><span class="text" style="display: none;">.ui-icon-grip-dotted-vertical</span></li>

	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-grip-dotted-horizontal"><span class="ui-icon ui-icon-grip-dotted-horizontal"></span><span class="text" style="display: none;">.ui-icon-grip-dotted-horizontal</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-grip-solid-vertical"><span class="ui-icon ui-icon-grip-solid-vertical"></span><span class="text" style="display: none;">.ui-icon-grip-solid-vertical</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-grip-solid-horizontal"><span class="ui-icon ui-icon-grip-solid-horizontal"></span><span class="text" style="display: none;">.ui-icon-grip-solid-horizontal</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-gripsmall-diagonal-se"><span class="ui-icon ui-icon-gripsmall-diagonal-se"></span><span class="text" style="display: none;">.ui-icon-gripsmall-diagonal-se</span></li>
	<li class="ui-state-default ui-corner-all iconBtn" title=".ui-icon-grip-diagonal-se"><span class="ui-icon ui-icon-grip-diagonal-se"></span><span class="text" style="display: none;">.ui-icon-grip-diagonal-se</span></li>
</ul>