<?php

function getAllOrders(){
    global $db;
    $sql = "SELECT * FROM orders";
    $pdoS = $db->query($sql);
    $orders = $pdoS->fetchALL();
    return $orders;
}
function placeOrder($prodID,$cusName,$amtOrdered,$purchaseID){
    global $db;
    $sql = "INSERT INTO orders (`productID`,`customerName`,`qtyOrdered`,`purchaseID`) VALUES('$prodID','$cusName','$amtOrdered','$purchaseID')";
    $pdoS = $db->query($sql);
}




















?>