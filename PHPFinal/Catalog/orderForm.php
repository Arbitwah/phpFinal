<?php $singleProd = getOneProduct($productID); foreach($singleProd as $product){?>
<form class="col-md-4" action="index.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Product Name:</label>
      <input type="text" class="form-control"  value="<?= $product['productName']; ?>"readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Price</label>
      <input type="text" class="form-control" value="<?= $product['listPrice']; ?>"readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Quantity:</label>
    <input type="number" class="form-control" name="amtOrdered" min="1" max="<?= $product['qtyOnHand']; ?>" placeholder="<?= $product['qtyOnHand']; ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Customer Name: </label>
      <input type="text" class="form-control" name="cusName">
    </div>
  </div>
  <input type="hidden" name="amtOnHand" value="<?=$product['qtyOnHand']; ?>">
  <input type="hidden" name="placeOrder" value="order">
  <input type="hidden" name="prodID" value="<?php echo $product['productID']; ?>">
  <button type="submit" class="btn btn-primary">Place Order</button>
</form>
<?php } ?>