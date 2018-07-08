<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content='ie=edge'>
  <link rel='stylesheet' href="../css/bootstrap.css">
  <link rel='stylesheet' href="../css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">
  <title><?php echo SITENAME;?></title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <a class="navbar-brand" href="#"><img class="header-logo" src='../img/logo.png'/></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">References</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lumino Solid Surface</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></i>Q & A</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></i>Discount</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Market</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="lang-circle" src='../img/eng.png'/>
          </a>
          <div id="langBar" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a href="index.php?url=pages/index_sr">
              <img id="langCircleSrb" class="lang-circle" src='../img/srb.png'/>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown userDrop">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropDownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropDownUser">
            <form>
            <div class="form-group">
              <input type="email" class="form-control" id="signInEmail" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="signInPass" placeholder="Password">
            </div>
            <div class="form_sign_register">
              <button type="submit" class="btn btn-primary">Sign In</button>
              <p>or</p>
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </form>
          </div>
        </li>
        </ul>
      </div>
    </div>
    </nav>
  </header>
  <div class="container">
