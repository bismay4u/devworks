<?php

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
.content input[type=file],.content select {
	width:90%;height:24px;
	margin-left:30px;
}
.content input[type=text] {
	border:1px solid #aaa;
}
.content .bar {
	text-align:center;
}
.content .bar button {
	width:100px;height:28px;
	font:16px verdana;
}
</style>
<div class='wrapper'>
	<div class='header'>Plugin Uploader</div>
	<div class='Content'>
		<form method=post action='' onsubmit=''>
			<ul>
				<li>Plugin File</li>
				<li><Input name=plugin_file type=file /></li>
				<li>Hash Type</li>
				<li>
					<select name='plugin_type'>
						<option value='file'>File</option>
            <option value='folder'>Folder Zip</option>
					</select>
				</li>
			</ul>
			<div class=bar>
				<button type=reset>Reset</button>
				<button type=submit>Submit</button>
			</div>
		</form>
	</div>
</div>

