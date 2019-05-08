<?php 
function getAllCats(){
    global $db;
    $sql = "SELECT * FROM categories";

    $pdoS = $db->query($sql);
    $cat = $pdoS->fetchAll();
    return $cat;
}

function getOneCatName($catID){
    global $db;
    $sql = "SELECT * FROM categories WHERE categoryID = '$catID'";
    $pdoS = $db->query($sql);
    $cat = $pdoS->fetch();

    return $cat['categoryName'];

}



?>