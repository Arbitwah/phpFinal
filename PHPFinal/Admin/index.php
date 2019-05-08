<?php session_start(); ?>
<?php include "../model/database.php";?>
<?php include "../model/admin_db.php";?>
<?php include "../view/header.php"; ?>
<?php 

$userName = filter_input(INPUT_POST,'userName',FILTER_DEFAULT);
$password = filter_input(INPUT_POST,'password',FILTER_DEFAULT);
//$comPassword = md5(filter_input(INPUT_POST,'comppassword',FILTER_DEFAULT));
$securePass = md5($password); 
$logout = filter_input(INPUT_GET,'logout',FILTER_DEFAULT);



//echo("$userName,$password,$conPassword");

if(!isset($userName) && !isset($password)){
    header('Location: ./login.php');
}
elseif(empty($password) and empty($userName)){
    $_SESSION["error"] = "Password and Username where blank";
    header('Location: ./login.php');
}

elseif($password== NULL){
    $_SESSION["error"] = "Password field is empty";
    header('Location: ./login.php');
}elseif($userName == NULL)
{
    $_SESSION["error"] = "Username field is empty";
    header('Location: ./login.php');
    
}else{
    $verify = verifyUser($userName,$securePass);
    if($verify == true){
        $_SESSION['valid']="yes";
        $_SESSION['error']="none";
        header('Location: ./home.php');
    }
    if($verify==false){
        $_SESSION['error']="Password or Username was inccorrect";
        $_SESSION['valid']="no";
        header('Location: ./index.php');
    }
}
if($logout=="Logout"){ 
    session_destroy();
    exit();
    header('Location: ./login.php');
   
}
?>
