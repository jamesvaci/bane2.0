<?php require '../app/views/include/header.php'; ?>
<h1><?php echo $data['posts'];?></h1>
<?php foreach($data['posts'] as $post): ?>
  <li><?php echo $post->first_name;?> </li>
  <?php endforeach;?>
<?php require '../app/views/include/footer.php'; ?>
