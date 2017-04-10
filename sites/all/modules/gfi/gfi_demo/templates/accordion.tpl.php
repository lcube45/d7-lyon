<h3><?php print $title; ?></h3>
<?php if($items): ?>
  <?php foreach($items as $id => $item): ?>
    <?php print($item['title']); ?>
  <?php endforeach; ?>
<?php endif; ?>
