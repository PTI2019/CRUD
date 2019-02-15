<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?= form_open('welcome/insert') ?>
		<input type="text" name="username" placeholder="Username" id="">
		<input type="password" name="password" placeholder="Password" id="">
		<input type="submit" name="daftar" value="Daftar" id="">
	<?= form_close() ?>

	<table style="margin-top:25px;">
		<tr>
			<td>Username</td>
			<td>Password</td>
			<td>Id Role</td>
		</tr>
		<?php foreach ($data_username as $k) { ?>
		<tr>
			<td><?= $k->username ?></td>
			<td><?= $k->password ?></td>
			<td><?= $k->id_role ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>