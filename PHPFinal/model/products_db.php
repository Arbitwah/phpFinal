<?php

function getAllproducts($catID){
    global $db;
    $sql = "SELECT * FROM products WHERE categoryID = '$catID'";
    $pdoS = $db->query($sql);
    $products = $pdoS->fetchALL();
    return $products;
}

function getOneProduct($productID){
    global $db;
    $sql = "SELECT * FROM products WHERE productID = '$productID'";
    $pdoS = $db->query($sql);
    $product = $pdoS->fetchAll();

    return $product;

}

function addProduct($productName,$productImage,$catID,$listPrice,$qtyOnHand){
    global $db;
    $sql = "INSERT INTO products (`categoryID`,`productName`,`productImage`,`listPrice`,`qtyOnHand`) VALUES('$catID','$productName','$productImage','$listPrice','$qtyOnHand')";
    $pdoS = $db->query($sql);

    
}



function editProduct($productID,$productName,$productImage,$catID,$listPrice,$qtyOnHand){
    global $db;
    $sql = "UPDATE products SET productName = '$productName',categoryID ='$catID',productImage='$productImage',listPrice ='$listPrice',qtyOnHand = '$qtyOnHand'WHERE productID = '$productID'";
    $pdoS = $db->query($sql);
}


function deleteProduct($productID){
    global $db;
    $sql = "DELETE FROM products WHERE productID = $productID";
    $pdoS = $db->query($sql);
}

function getStoreproducts(){
    global $db;
    $sql = "SELECT * FROM products";
    $pdoS = $db->query($sql);
    $products = $pdoS->fetchALL();
    return $products;
}

function reduceProduct($prodID,$amtLeft){
    global $db;
    $sql = "UPDATE products SET qtyOnHand = '$amtLeft' WHERE productID = '$prodID'";
    $pdoS = $db->query($sql);
}









?>