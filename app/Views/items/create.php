<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/items" method="post">
    <?= csrf_field() ?>

    <label>Name:</label>
    <input type="text" name="name" ><br>

    <label>Description:</label>
    <textarea name="description"></textarea><br>

    <input type="submit" name="submit" value="Create item">
</form>