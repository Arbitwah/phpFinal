<?php 
function verifyUser($userName,$securePass)
{
    global $db;
    $sql = "SELECT * FROM users WHERE userName = '$userName' AND password = '$securePass'";
    $pdos = $db->query($sql);
    $userCheck = $pdos->fetch();

    if($userCheck == NULL){
     $verdict = false;
    }
    if($userCheck!=NULL){
     $verdict = true;
     $_SESSION['User'] = $userCheck['firstName'];
     $_SESSION['userName']=$userCheck['userName'];
    }
    return $verdict;
}

?>