<?php
	require_once('layout/header.php');
?>
<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
<div class="semi">
Unit of Competency/Module Titles
</div>
<table cellspacing= 0px cellpadding=5px>
	
	<tbody>
		<tr>
			<th rowspan="2" colspan="2" class="name">Name</th>
			<th colspan="5" class="basic">Basic</th>
			<th colspan="2" class="common">Common</th>
			<th colspan="5" class="core">Core</th>
		</tr>
		<tr>
			<td class="colorB">S1</td>
			<td class="colorB">S2</td>
			<td class="colorB">S3</td>
			<td class="colorB">S4</td>
			<td class="colorB">S5</td>
			<td class="colorC">S6</td>
			<td class="colorC">S7</td>
			<td class="colorC1">S8</td>
			<td class="colorC1">S9</td>
			<td class="colorC1">S10</td>
			<td class="colorC1">S11</td>
			<td class="colorC1">S12</td>
		</tr>
		<?php 
			for ($i = 1; $i <= 10; $i++) {
		?>
			<tr>
				<td  class="number"><?php echo $i; ?></td>
				<td class="a"></td>
				<td class="b"></td>
				<td class="b"></td>
				<td class="b"></td>
				<td class="b"></td>
				<td class="b"></td>
				<td class="c"></td>
				<td class="c"></td>
				<td class="d"></td>
				<td class="d"></td>
				<td class="d"></td>
				<td class="d"></td>
				<td class="d"></td>
			</tr>
		<?php
			}
		?>

</table>
<?php
	require_once('layout/footer.php');
?>