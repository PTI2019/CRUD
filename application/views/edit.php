<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?= form_open('welcome/edit') ?>
		<input type="text" name="username" placeholder="Username" id="">
		<input type="password" name="password" placeholder="Password" id="">
		<input type="submit" name="edit" value="Edit" id="">
	<?= form_close() ?>
    <a href="<?= site_url('welcome/edit/') ?>">Edit</a>
    
</body>
</html>