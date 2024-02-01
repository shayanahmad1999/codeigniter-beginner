<h2>Edit Item</h2>
<?= (form_open('items/update/'.$item['id'])); ?><br>
<label>Name:</label>
<input type="text" name="name" value="<?php echo $item['name']; ?>" required><br>
<label>Description:</label>
<textarea name="description"><?php echo $item['description']; ?></textarea><br>
<input type="submit" value="Update Item">
<?= (form_close()); ?>
