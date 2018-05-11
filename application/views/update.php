<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="">
	<div id="header">
		<center>
			<?php foreach ($isi->result() as $key): ?>
				<div class="border">
					<label><h1>Update Profile</h1></label>
					<form action="http://localhost/tiket/index.php/User/gantikan/<?php echo $key->id ?>" method="post">

						<input type="text" name="username" placeholder="<?php echo $key->username ?>"><br>
						<input type="text" name="password" placeholder="<?php echo $key->password ?>"><br>
						<input type="text" name="fullname" placeholder="<?php echo $key->fullname ?>"><br>
						<input type="text" name="level" placeholder="<?php echo $key->level ?>"><br>
						<input type="submit" value="save">
					</form>
				</div>
			<?php endforeach ?>
		</center>
	</div>
</body>
</html>

