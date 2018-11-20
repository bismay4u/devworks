<div style='padding:20px;'>
<table width=100% cellpadding=2 cellspacing=0 style='margin:auto;'>
	<thead>
	</thead>
	<tbody>
		<?php
			foreach($_SERVER as $a=>$b) {
				echo "<tr><td>$a</td><td>$b</td></tr>";
			}
		?>
	</tbody>
</table>
</div>