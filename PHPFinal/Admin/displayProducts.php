<section>
<h4>Products</h4>
<?php $getProducts = getAllproducts($catID);?>
<?php foreach($getProducts as $product){?>
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo("$product[productName]");?></h5>
    <a href="<?php echo "?delete=prod&prodID=$product[productID]"?>" class="card-link">Delete</a>
    <a href="<?php echo "?edit=prod&prodID=$product[productID]"?>" class="card-link">Edit</a>
  </div>
</div>
<?php }?>
<?php
echo("<br><a class='btn btn-success' href='addProduct.php'>Add</a>");
?>

</section>