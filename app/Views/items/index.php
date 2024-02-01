<h2>Items</h2>

<?php 

?>
<?php if (! empty($items) && is_array($items)): ?>
<ul>
    <?php foreach ($items as $item): ?>
        <li>
        <h3><?= esc($item['name']) ?></h3>

<div class="main">
    <?= esc($item['description']) ?>
</div>
<a href="<?= esc(base_url('items/edit/' . $item['id'])); ?>">Edit</a> |
<a href="<?= esc(base_url('items/soft_delete/' . $item['id'])); ?>" onclick="return confirm('Are you sure?')">Soft Delete</a>

        </li>
    <?php endforeach; ?>
</ul>
<?php endif ?>
<a href="<?php echo base_url('items/create'); ?>">Add Item</a>
<a href="<?php echo base_url('items/deleted_items'); ?>">Deleted Item</a>
<br>

<a href="<?= base_url('auth/logout') ?>">Logout</a>