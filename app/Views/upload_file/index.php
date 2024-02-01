<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Form</title>
</head>
<body>

<?php if(is_array($errors)): ?>
<?php foreach ($errors as $error): ?>
    <li><?= esc($error) ?></li>
<?php endforeach ?>
<?php endif ?>

<?= form_open_multipart('upload/upload') ?>
    <input type="file" name="userfile" size="20">
    <br><br>
    <input type="submit" value="upload">
</form>

<h1>Multiple File</h1>

<?= form_open_multipart('upload/multiple') ?>
    <input type="file" name="images[]" multiple>
    <br><br>
    <input type="submit" value="upload">
</form>

</body>
</html>