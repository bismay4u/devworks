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
    $("#targetFrame").attr("src","<?=getPluginLink("welcome")?>")
  }, 1000);
});
</script>