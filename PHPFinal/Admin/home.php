<?php if(!isset($_SESSION)){session_start();} ?>
<?php if($_SESSION['valid']!="yes"){
    header('Location: ./index.php');
    exit();
}?>
<?php // Database Connection and related methods?>
<?php include "../view/header.php"; ?>
<?php include "../model/database.php";?>
<?php include "../model/orders_db.php";?>
<?php include "../model/products_db.php";?>
<?php include "../model/categories_db.php";?>
<?php //END of Database Connection and related methods?>
 
<?php
//Variables
$catID = filter_input(INPUT_GET,'cat',FILTER_DEFAULT);
$categoryID=filter_input(INPUT_POST,'cat',FILTER_DEFAULT);
$order=filter_input(INPUT_GET,'order',FILTER_DEFAULT);
$productID=filter_input(INPUT_GET,'prodID',FILTER_DEFAULT);
$prodID=filter_input(INPUT_POST,'prodID',FILTER_DEFAULT);
$delete = filter_input(INPUT_GET,'delete',FILTER_DEFAULT);
$edit = filter_input(INPUT_GET,'edit',FILTER_DEFAULT);
$add = filter_input(INPUT_POST,'addProd',FILTER_DEFAULT);
$prodEdit = filter_input(INPUT_POST,'productEdit',FILTER_DEFAULT);
$productName = filter_input(INPUT_POST,'productName',FILTER_DEFAULT);
$productImage = filter_input(INPUT_POST,'productImage',FILTER_DEFAULT);
$listPrice = filter_input(INPUT_POST,'listPrice',FILTER_DEFAULT);
$qtyOnHand = filter_input(INPUT_POST,'qtyOnHand',FILTER_DEFAULT);


//end of Variables
?>
<h1>Admin Home Page</h1>
<!-- <form action="index.php" method="post">
    <input type="submit" class="btn btn-primary" value="Logout" name="logout">
</form> -->
<?php if($edit != "prod"&& $delete!="prod"){ include "displayCategories.php";}
if($delete==NULL && $edit==NULL){if($order=="true"){ include "displayOrders.php";}}
if($delete==NULL && $edit==NULL){if($catID != NULL){include "displayProducts.php";}}
else if($edit == "prod"){include "editproduct.php";}
else if($delete =="prod"){deleteProduct($productID);header("Location ./home.php");}
if($add=="ADD")
{
    $productImage = $_FILES['addImage']['name'];
    if($productName != NULL||$categoryID !=NULL||$listPrice!=NULL||$qtyOnHand!=NULL||$productImage!=NULL)
    {
        addProduct($productName,$productImage,$categoryID,$listPrice,$qtyOnHand);
        $tmpName = $_FILES['addImage']['tmp_name'];
        $dir = "./images/";
        $target_file=$dir .basename($_FILES['addImage']['name']);
        move_uploaded_file($tmpName,$target_file);
    }
    else
    {
        $_SESSION['error']="Product was not added one of the fields was missing";
    }
}
else if($prodEdit == 'edit')
{
    if($_FILES['addImage']['name']!= NULL)
    {
        $productImage = $_FILES['addImage']['name'];
        editProduct($prodID,$productName,$productImage,$categoryID,$listPrice,$qtyOnHand);
        $tmpName = $_FILES['addImage']['tmp_name'];
        $dir = "./images/";
        $target_file=$dir .basename($_FILES['addImage']['name']);
        move_uploaded_file($tmpName,$target_file);
        $_SESSION['error']="none";
    }
    else if($productImage != NULL && $productName != NULL && $categoryID != NULL && $listPrice !=NULL && $qtyOnHand != NULL)
    {
        editProduct($prodID,$productName,$productImage,$categoryID,$listPrice,$qtyOnHand);
        $_SESSION['error']="none";
    }
    else
    {
        $_SESSION['error']="Product was not edited. one of the fields was missing";
    }
}
 
?>

<?php include "../view/footer.php"; ?>
