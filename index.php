<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php $i = 0; ?>
	<table>
		<tr>
			<?php while($i < 9):?>
				<td>
					<?php echo $i;?>
					<?php $i++;?>
				</td>
			<?php endwile; ?>
		</tr>	
	</table>
</body>

</html>