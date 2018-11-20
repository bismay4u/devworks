<style>
.wrapper {
	width:800px;height:auto;
	border:2px solid #aaa;
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
	list-style:none;margin-left:-30px
}
.content textarea {
	height:200px;
	resize:none;
}
.content textarea {
	border:1px solid #aaa;
}
.content .bar {
	text-align:center;
}
#svgviewer {
	width:800px;min-height:300px;
	border:2px solid #aaa;
	margin:auto;margin-top:10px;
	background:white repeat center center;
}
</style>
<script type="text/javascript" src="../js/jquery.js"></script>
<div class='wrapper'>
	<h1 class='header'>SVG Data Viewer</h1>
	<div class='content' style='padding:10px;'>
		<form method=post>
      <div class="form-group">
  			<textarea id='svgSrc' class="form-control"></textarea>
      </div>
			<div class='bar text-center' style='padding:3px;'>
				<button type=reset class='btn btn-danger'>Reset</button>
				<button type=button onclick='viewSVGContent()' class='btn btn-primary'>Submit</button>
			</div>
		</form>
	</div>
</div>
<div id='svgviewer'></div>
<script>
function viewSVGContent() {
	svgImg=$("#svgSrc").val();
	$("#svgviewer").css("background-image","url("+svgImg+")");
}
</script>
