<div class="content-wrapper">
	<?php
		// include __DIR__."/breadcrumb.php";
	?>
  <iframe id='targetFrame' name='targetFrame' width=100% height=100% frameBorder=0>
    
  </iframe>
</div>
<script>
$(function() {
  setTimeout(function() {
    $("#targetFrame").height($("#targetFrame").parent().height());
    if(window.location.hash.length>1) {
      $("#targetFrame").attr("src","<?=getPluginLink("welcome")?>".replace("welcome",window.location.hash.substr(1)))
    } else {
      $("#targetFrame").attr("src","<?=getPluginLink("welcome")?>")
    }
  }, 1000);
});
</script>