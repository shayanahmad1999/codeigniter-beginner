<form method="post" action="<?= base_url('auth/login') ?>">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    
    <button type="submit">Login</button>
</form>

<?php if(isset($error)) echo $error; ?>
