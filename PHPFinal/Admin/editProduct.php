<?php if(!isset($_SESSION)){session_start();} ?>
<?php if($_SESSION['valid']!="yes"){
    header('Location: ./index.php');
    exit();
}?>
<?php include "../view/header.php"; ?>
<form action="home.php" method="POST" enctype="multipart/form-data" class="col-md-4">
<?php $singleProd = getOneProduct($productID); foreach($singleProd as $product){?>
  <div class="form-group">
    <label for="productName">Product Name</label>
    <input type="text" class="form-control" name="productName" placeholder="Enter Product Name" value="<?php echo $product['productName']; ?>">
  </div>
  <div class="form-group">
      <label for="catID">Category</label>
      <select name="cat" class="form-control">
        <?php $getCat = getAllCats(); foreach($getCat as $cat){
        if($cat['categoryID']==$product['categoryID']){
          echo("<option selected value='$cat[categoryID]'>$cat[categoryName]</option>");  
        }
        else{
         echo("<option value='$cat[categoryID]'>$cat[categoryName]</option>");    
        }
    }?>
      </select>
  </div>
  <div class="form-group">
    <label for="productName">Image Name</label>
    <input type="text" class="form-control" name="productImage" placeholder="List Price" value="<?php echo $product['productImage']; ?>"readonly>
  </div>
  <div class="form-group">
    <label for="image">Select Image for Product</label>
    <input type="file" class="form-control-file" name="addImage">
  </div>
  <div class="form-group">
    <label for="productName">List Price</label>
    <input type="text" class="form-control" name="listPrice" placeholder="List Price" value="<?php echo $product['listPrice']; ?>">
  </div>
  <div class="form-group">
    <label for="productName">Quantity On Hand</label>
    <input type="text" class="form-control" name="qtyOnHand" placeholder="Quantity" value="<?php echo $product['qtyOnHand']; ?>">
  </div>
        <?php }?>
  <input type="hidden" name="prodID" value="<?php echo $product['productID'] ?>">
  <input type="hidden" name="productEdit" value="edit">
  <input type="submit" class="btn btn-primary" value="Edit">
</form>
<?php include "../view/footer.php"; ?>