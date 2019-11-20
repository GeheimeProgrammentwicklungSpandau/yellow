<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php $i = 1; ?>
	<table>
		<tr>
			<?php while($i < 11):?>
				<td>
					<?php echo $i;?>
					<?php $i++;?>
				</td>
			<?php endwhile; ?>
		</tr>	
	</table>
</body>

</html>