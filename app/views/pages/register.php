<?php require '../app/views/include/header.php'; ?>
<div class="row justify-content-center registerModal">
<form action="index.php?url=users/register" method='post'>
  <?php echo '<small>'.$data['success'].'</small>'?>
  <div class="form-group">
    <input type="name" name="first_name" class="form-control" placeholder="Enter first name" value="<?php echo $data['first_name'];?>">
    <?php echo '<small>'.$data['first_name_err'].'</small>'?>
  </div>
  <div class="form-group">
    <input type="name" name="last_name" class="form-control" placeholder="Enter last name" value="<?php echo $data['last_name'];?>">
    <?php echo '<small>'.$data['last_name_err'].'</small>'?>
  </div>
  <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Enter email"  value="<?php echo $data['email'];?>">
    <?php echo '<small>'.$data['email_err'].'</small>'?>
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $data['password'];?>">
    <?php echo '<small>'.$data['password_err'].'</small>'?>
  </div>
  <div class="form-group">
    <input type="password" name="conf_password" class="form-control" placeholder="Confim Password" value="<?php echo $data['confirm_password'];?>">
    <?php echo '<small>'.$data['confirm_password_err'].'</small>'?>
  </div>
  <button type="submit" class="btn btn-primary registerButton">Submit</button>
</form>
</div>
<?php require '../app/views/include/footer.php'; ?>
