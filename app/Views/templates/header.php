<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter Tutorial</title>
</head>
<body>

<nav>
    <a href="<?= base_url('/login') ?>">Login</a>
    <a href="<?= base_url('/auth/logout') ?>">Logout</a>
    <a href="<?= base_url('/items') ?>">Item</a>
    <a href="<?= base_url('/news') ?>">News</a>
    <a href="<?= base_url('/company') ?>">Company</a>
</nav>

    <?php
    
    if(session()->has('user_id'))
{
    echo '<h1>' . session()->get('user_name') . '</h1>';
}

    ?>
        <h1><?= esc($title) ?></h1>
</body>
</html>