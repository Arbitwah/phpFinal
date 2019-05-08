<?php session_start();?>
<?php include "../view/header.php"; ?>
<?php include "../model/database.php";?>
<?php include "../model/orders_db.php";?>
<?php include "../model/products_db.php";?>
<?php include "../model/categories_db.php";?>

<?php $productID =filter_input(INPUT_POST,'productID');?>
<?php $amtOrdered =filter_input(INPUT_POST,'amtOrdered');?>
<?php $cusName =filter_input(INPUT_POST,'cusName');?>
<?php $prodID =filter_input(INPUT_POST,'prodID');?>
<?php $order =filter_input(INPUT_POST,'placeOrder');?>
<?php $amtAvailable =filter_input(INPUT_POST,'amtOnHand');?>
<?php $purchaseID = md5($cusName.time().mt_rand())?>
<?php $amtLeft=$amtAvailable-$amtOrdered;?>




<?php if($productID!=NULL){
    include "orderForm.php";
}else{
    include "storeProducts.php";
}
if($order == "order"){
    if($cusName!=NULL&&$amtOrdered!=NULL){
        placeOrder($prodID,$cusName,$amtOrdered,$purchaseID);
        reduceProduct($prodID,$amtLeft);
    }
}




























