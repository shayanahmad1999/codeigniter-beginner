<h2>Soft Deletes</h2>
<?php if (! empty($items) && is_array($items)): ?>
<ul>
    <?php foreach ($items as $item): ?>
        <li>
        <h3><?= esc($item['name']) ?></h3>

<div class="main">
    <?= esc($item['description']) ?>
</div>
<a href="<?= esc(base_url('items/restore/' . $item['id'])); ?>">Restore</a> |
<a href="<?= esc(base_url('items/delete/' . $item['id'])); ?>" onclick="return confirm('Are you sure?')">Delete</a>

        </li>
    <?php endforeach; ?>
</ul>
<?php endif ?>
<a href="<?php echo base_url('items'); ?>">View Item</a>