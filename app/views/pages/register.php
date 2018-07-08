<?php require '../app/views/include/header.php'; ?>
<div class="row justify-content-center registerModal">
<form action="index.php?url=users/register" method='post'>
  <div class="form-group">
    <input type="name" name="name" class="form-control" id="nameRegister" aria-describedby="emailHelp" placeholder="Enter name" value="<?php echo $data['name'];?>">
    <?php echo '<small>'.$data['name_err'].'</small>'?>
  </div>
  <div class="form-group">
    <input type="email" name="email" class="form-control" id="emailRegister" aria-describedby="emailHelp" placeholder="Enter email"  value="<?php echo $data['email'];?>">
    <?php echo '<small>'.$data['email_err'].'</small>'?>
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" id="passRegister" placeholder="Password" value="<?php echo $data['password'];?>">
    <?php echo '<small>'.$data['password_err'].'</small>'?>
  </div>
  <div class="form-group">
    <input type="password" name="conf_password" class="form-control" id="conf_passRegister" placeholder="Confim Password" value="<?php echo $data['confirm_password'];?>">
    <?php echo '<small>'.$data['confirm_password_err'].'</small>'?>
  </div>
  <?php echo '<small>'.$data['success'].'</small>'?>
  <button type="submit" class="btn btn-primary registerButton">Submit</button>
</form>
</div>
<?php require '../app/views/include/footer.php'; ?>
