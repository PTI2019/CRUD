<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

    <?php foreach ($user as $k) { ?>
        <?= form_open('welcome/update') ?>
        <input type="text" name="username" placeholder="Username" value="<?= $k->username ?>">
		<input type="text" name="password" placeholder="Password" value="<?= $k->password ?>">
		<input type="submit" name="edit" value="Update" id="">


        <?= form_close() ?>
    <?php
    }
    ?>


</body>
</html>