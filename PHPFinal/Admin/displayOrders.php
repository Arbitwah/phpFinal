<section>
<h4>Orders</h4>
<?php $getOrders = getAllOrders();?>
<?php foreach($getOrders as $order){?>
<div class="card col-sm">
  <div class="card-body">
    <h5 class="card-title"><?= $order['customerName'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Customer Name</h6>
    <p class="card-text">Quantity Ordered:  <?= $order['qtyOrdered'] ?></p>
    <p class="card-text">Purchase ID Num:   <?= $order['purchaseID']; ?></p>
  </div>
</div>
<?php }?>

</section>