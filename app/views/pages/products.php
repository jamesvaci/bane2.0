<?php require '../app/views/include/header.php'; ?>
<?php 
echo "<div class='row'>";
foreach ($data as $category) {
  $imgName= strtolower($category->name);
  $name = str_replace("_", " ", $category->name);
  echo "<div class='col-md-3'>".$name."<img src='./img/category/".$imgName.".png'/></div>";
} 
echo "</div>";
?>
<?php require '../app/views/include/footer.php'; ?>
