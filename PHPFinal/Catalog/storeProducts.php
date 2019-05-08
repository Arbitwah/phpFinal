<?php $products = getStoreproducts()?>
<?php foreach($products as $product){?>
<section>
<div class="card text-white bg-dark mb-3 text-right" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="../images/<?php echo $product['productImage'] ?>" class="card-img" alt="<?php echo $product['productImage'] ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $product['productName']; ?></h5>
        <p class="card-text">$<?php echo $product['listPrice'] ?></p>
        <p class="card-text">Quantitiy: <?php echo $product['qtyOnHand'] ?></p>
        <form action="index.php" method="post" class="card-text">
            <input type="hidden" name="productID" value="<?php echo $product['productID'] ?>">
            <button type="submit" class="btn btn-danger">Purchase</button>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<?php } ?>