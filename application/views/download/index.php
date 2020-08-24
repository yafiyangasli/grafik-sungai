<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Air.xls");
	?>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Debit</th>
			<th>Ketinggian</th>
			<th>Kecepatan</th>
		</tr>
		
		<?php $i=1;?>
		<?php foreach ($harian as $hr) :?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $hr['tanggal']; ?></td>
			<td><?php echo $hr['debit']; ?></td>
			<td><?php echo $hr['tinggi']; ?></td>
			<td><?php echo $hr['kecepatan']; ?></td>
		</tr>
		<?php $i++;?>
		<?php endforeach;?>
	</table>
</body>
</html>