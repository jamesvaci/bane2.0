<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="https://wrappixel.com/demos/admin-templates/admin-wrap-lite/assets/images/favicon.png">
    <title>Admin Panel</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../css/morris.css" rel="stylesheet">
    <link href="../css/c3.css" rel="stylesheet">
    <link href="../css/croppie.css" rel="stylesheet">
    <link href="../css/style1.css" rel="stylesheet">
    <link href="../css/dashboard1.css" rel="stylesheet">
    <link href="../css/default.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="https://wrappixel.com/demos/admin-templates/admin-wrap-lite/main/index.html">
                        <!-- Logo icon --><b>
                            <img src="../img/logo.png" alt="homepage" class="dark-logo">
                            <!-- Light Logo icon -->
                            <img src="../img/logo.png" alt="homepage" class="light-logo">
                        </b>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input class="form-control" placeholder="Search &amp; enter" type="text"> <a class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../css/1.jpg" alt="user" class=""> <span class="hidden-md-down">Mark Sanders &nbsp;</span> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar ps ps--theme_default" data-ps-id="7c00ddfd-45e0-5269-7fb7-4a7366a5389a">
                <nav  class="sidebar-nav active" >
                    <ul id="myTab" class="nav in" role="tablist" style="display: flex; flex-direction: column;">
                        <li> <a class="nav-link active" data-toggle="tab" href="#dashbord" role="tab" aria-controls="home" aria-selected="true">Dashboard</a></li>
                        <li> <a class="nav-link" data-toggle="tab" href="#users" role="tab" aria-controls="profile" aria-selected="false">Users</a></li>
                        <li> <a class="nav-link" data-toggle="tab" href="#qa" role="tab" aria-controls="messages" aria-selected="false">Q & A</a></li>
                        <li> <a class="nav-link" data-toggle="tab" href="#products" role="tab" aria-controls="settings" aria-selected="false">Products</a></li>
                        <li> <a class="nav-link" data-toggle="tab" href="#news" role="tab" aria-controls="settings" aria-selected="false">News</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#orders" role="tab" aria-controls="settings" aria-selected="false">Orders</a></li>
                    </ul>
                </nav>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper" style="min-height: 984px;">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                    </div>
                </div>
            <div class="tab-content">
              <div class="tab-pane active" id="dashbord" role="tabpanel" aria-labelledby="home-tab">Dashbord</div>
              <div class="tab-pane" id="users" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col"><i class="fas fa-user"></i></th>
                      <th scope="col"><i class="far fa-envelope"></i></th>
                      <th scope="col"><i class="fas fa-phone"></i></th>
                      <th scope="col"><i class="fas fa-dolly"></i></th>
                      <th scope="col">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['Users'] as $app) {
                        $other =json_decode($app->other);
                        $phone = $other->phone;
                        echo "<tr>";
                        echo "<td>".$app->first_name." ".$app->last_name."</td>";
                        echo "<td>".$app->email."</td>";
                        echo "<td>".$phone."</td>";
                        echo "<td>".$app->orders."</td>";
                        echo "<td><form action='index.php?url=admins/removeuser' method='post'><button type='submit' name='app_id' class='fas fa-trash' value=".$app->app_id."></button></form></td>";
                        echo "</tr>";
                    }?>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="qa" role="tabpanel" aria-labelledby="messages-tab">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col"><i class="fas fa-user"></i></th>
                      <th scope="col">Question</th>
                      <th scope="col">Answer</th>
                      <th scope="col"><i class="fas fa-eye"></i></th>
                      <th scope="col"><i class="fas fa-edit"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['QA'] as $qa) {
                        echo "<tr>";
                        echo "<td>".$qa->user_id."</td>";
                        echo "<td>".$qa->question."</td>";
                        echo "<td>".$qa->answer."</td>";
                        if ($qa->hidden == 0) {
                          echo '<td><input type="checkbox" class="form-check-input" style="left:0; opacity:1; position:relative;"></td>';
                        }else{
                          echo '<td><input type="checkbox" checked class="form-check-input" style="left:0; opacity:1; position:relative;"></td>';
                        }
                        echo "<td><form action='index.php?url=admins/removeuser' method='post'><button type='submit' name='app_id' class='fas fa-edit'></button></form></td>";
                        echo "</tr>";
                    }?>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="products" role="tabpanel" aria-labelledby="settings-tab">
                <div class="text-center m-t-30">
                    <button id="cropper" data-toggle="modal" data-target="#addNewProduct" class="btn waves-effect waves-light btn-info hidden-md-down"> Add New Product</button>
                </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Category</th>
                      <th scope="col">Image</th>
                      <th scope="col">Price</th>
                      <th scope="col">New Price</th>
                      <th scope="col">Created</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['Products'] as $products) {
                        echo "<tr>";
                        echo "<td>".$products->id."</td>";
                        echo "<td>".$products->name."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$products->price."</td>";
                        echo "<td>".$products->new_price."</td>";
                        echo "<td>".date('d/m/Y', $products->created)."</td>";
                        echo "<td><form action='index.php?url=admins/removeuser' method='post'><button type='submit' name='app_id' class='fas fa-edit'></button></form></td>";
                        echo "<td><form action='index.php?url=admins/removeuser' method='post'><button type='submit' name='app_id' class='fas fa-trash'></button></form></td>";
                        echo "</tr>";
                    }?>
                  </tbody>
                </table>
                </div>
              <div class="tab-pane" id="news" role="tabpanel" aria-labelledby="settings-tab">
                <div class="text-center m-t-30">
                  <button data-toggle="modal" data-target="#addNewNews" class="btn waves-effect waves-light btn-info hidden-md-down"> Add New Product</button>
                </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Date</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['News'] as $news) {
                        echo "<tr>";
                        echo "<td>".$news->id."</td>";
                        echo "<td>".$news->title."</td>";
                        echo "<td>".$news->description."</td>";
                        echo "<td>".date('d/m/Y', $news->created)."</td>";
                        echo "<td><form action='index.php?url=admins/removeuser' method='post'><button type='submit' name='app_id' class='fas fa-edit'></button></form></td>";
                        echo "<td><form action='index.php?url=admins/removeuser' method='post'><button type='submit' name='app_id' class='fas fa-trash'></button></form></td>";
                        echo "</tr>";
                    }?>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="orders" role="tabpanel" aria-labelledby="settings-tab">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">User</th>
                      <th scope="col">Products</th>
                      <th scope="col">Price Total</th>
                      <th scope="col">Status</th>
                      <th scope="col">Created</th>
                      <td scope="col">Edit</th>
                      <td scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['Orders'] as $orders) {
                        echo "<tr>";
                        echo "<td>".$orders->id."</td>";
                        echo "<td>".$orders->user_id."</td>";
                        echo "<td>".$orders->product_id."</td>";
                        echo "<td></td>";
                        echo "<td>".$orders->status."</td>";
                        echo "<td>".date('d/m/Y', $orders->created)."</td>";
                        echo "<td><form action='index.php?url=admins/removeuser' method='post'><button type='submit' name='app_id' class='fas fa-edit'></button></form></td>";
                        echo "<td><form action='index.php?url=admins/removeuser' method='post'><button type='submit' name='app_id' class='fas fa-trash'></button></form></td>";
                        echo "</tr>";
                    }?>
                  </tbody>
                </table></div>
            </div>
            </div>
            <footer class="footer"> © 2018 Adminwrap by wrappixel.com </footer>
        </div>
    </div>
<div class="modal fade" id="addNewNews" tabindex="-1" role="dialog" aria-labelledby="addNewProductLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewArticleLabel">Add New Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="crop_body table">
          <div class="tableRow">
            <h2>1. Upload Picture</h2>  
            <form class="input-group" id="img2b64T">
                <input id="articlePicture" type="file"/>
            </form>
          </div>
          <hr>
          <div class="tableRow">
            <h2>2. Write Article</h2>  
            <form class="input-group">
              <input name="news_title" type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Title">
              <input name="news_description" type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Description">
            </form>
          </div>
          <hr>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add New Article</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="addNewProduct" tabindex="-1" role="dialog" aria-labelledby="addNewProductLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="index.php?url=admins/addproduct" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewProductLabel">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="crop_body table">
          <div class="tableRow">
            <h2>1. Upload Picture</h2>  
            <form class="input-group" id="img2b64">
                <input id="inputFileToLoad" type="file" onchange="encodeImageFileAsURL();" />
                <input id="img_full" name="img_full" style="display:none;"></input>
            </form>
          </div>
          <hr>
          <div class="tableRow">
            <h2>2. Crop It</h2>  
            <div class="tableCell box">
              <canvas id="panel" width="380" height="380"></canvas>
            </div>
            <div class="tableCell box">
              <img id="crop_result"/>
              <input id="img_thumb" name="img_thumb" style="display:none"></input>
            </div>
          </div>
          <div class="tableRow">
            <div class="tableCell">
              Zoom it:
              <input id='scaleSlider' type='range' min='0' max='2.0' step='0.01' value='0.0' />
            </div>
            <div class="tableCell">
              <a class="btn btn-primary" id="cropImgButtn">Crop It</a>
            </div>
          </div>
          <hr>
          <div class="tableRow">
            <h2>3. Pick Category</h2>  
            <div class="tableCell">
              Pick Category
            </div>
            <div class="tableCell">
              <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Main Category
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
            </div>
            <div class="tableCell">
              <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sub Category
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
            </div>
          </div>
          <hr>
          <div class="tableRow">
            <h2>4. Input Name</h2>  
            <div class="tableCell">
              <input name="product_name" type='text' class="form-control" placeholder="Type in Name for product"/>
              <input name="product_desc" type='text' class="form-control" placeholder="Type in Description for product"/>
            </div>
          </div>
          <hr>
          <div class="tableRow">
            <h2>5. Price</h2>  
            <div class="tableCell">
              <input name="product_price" type='text' class="form-control" placeholder="Type in Price"/>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/perfect-scrollbar.js"></script>
    <script src="../sj/waves.js"></script>
    <script src="../js/sidebarmenu.js"></script>
    <script src="../js/custom1.js"></script>
    <script src="../js/croppie.js"></script>
    <script src="../js/raphael-min.js"></script>
    <script src="../js/morris.js"></script>
    <script src="../js/d3.js"></script>
    <script src="../js/c3.js"></script>
    <script src="../js/dashboard1.js"></script>
    <script src="../js/crop.js"></script>

</body></html>
