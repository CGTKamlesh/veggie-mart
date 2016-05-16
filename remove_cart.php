<?php
session_start();
include 'common_func.php';
$response_array=array();
if(empty($_POST)){
    $response_array=array('success'=>0,'message'=>'Sorry, Please try after some time');
}
else{
    $abbr=$_POST['abbr'];
    unset($_SESSION['cart'][$abbr]);
    if(count($_SESSION['cart'])==0){
        session_destroy();
    }
    processCartTotal();
    $response_array=array('success'=>1);
}
echo json_encode($response_array);
exit;
?>