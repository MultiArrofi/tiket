<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="<?php echo base_url("index.php/User/add"); ?>">Tambah Anggota</a>
	<table border="1">
		<tr>
			<td>id</td>
			<td>Username</td>
			<td>password</td>
			<td>Fullname</td>
			<td>level</td>
			<td>Dihapus</td>
			<td>Diupdate</td>
		</tr>
		<?php foreach ($isi->result()as $key):?>
			<tr>
				<td><?php echo $key->id ?></td>
				<td><?php echo $key->username ?></td>
				<td><?php echo $key->password ?></td>
				<td><?php echo $key->fullname ?></td>
				<td><?php echo $key->level ?></td>
				<td><a href="http://localhost/tiket/index.php/User/delete/<?php 
				echo $key->id  ?>"> Delete</td>
				<td><a href="http://localhost/tiket/index.php/User/update/<?php 
				echo $key->id ?>"> Update </td>		
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>
