<?php if(!isset($_SESSION)){session_start();} ?>
<?php if($_SESSION['valid']!="yes"){
    header('Location: ./index.php');
    exit();
}?>
<?php include "../view/header.php"; ?>
<?php include "../model/database.php";?>
<?php include "../model/categories_db.php";?>
<form action="home.php" method="POST" enctype="multipart/form-data" class="col-md-4">
  <div class="form-group">
    <label for="productName">Product Name</label>
    <input type="text" class="form-control" name="productName" placeholder="Enter Product Name">
  </div>
  <div class="form-group">
      
      <label for="cat">Category</label>
      <select name="cat" class="form-control">
        <?php $getCat = getAllCats(); foreach($getCat as $cat){ ?>
        <?php echo("<option value='$cat[categoryID]'>$cat[categoryName]</option>"); } ?>
      </select>
  </div>
  <div class="form-group">
    <label for="image">Select Image for Product</label>
    <input type="file" class="form-control-file" name="addImage">
  </div>
  <div class="form-group">
    <label for="productName">List Price</label>
    <input type="text" class="form-control" name="listPrice" placeholder="List Price">
  </div>
  <div class="form-group">
    <label for="productName">Quantity On Hand</label>
    <input type="text" class="form-control" name="qtyOnHand" placeholder="Quantity">
  </div>
  <input type="hidden" name="addProd" value="ADD">
  <input type="submit" class="btn btn-primary" value="Add">
</form>
<?php include "../view/footer.php"; ?>