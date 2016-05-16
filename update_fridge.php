<?php
session_start();
include 'common_func.php';
$response_array=array();
if(empty($_POST)){
    $response_array=array('success'=>1,'message'=>'Sorry, Please try after some time');
}
else{
    $cart_info=$_POST['cart_info'];
    foreach($cart_info as $key=>$value){
        $_SESSION['cart'][$key]['quantity']=$value;
        $_SESSION['cart'][$key]['cal_price']=number_format($_SESSION['cart'][$key]['price']*$value,2,'.','');
    }
    processCartTotal();
    $response_array=array('success'=>1);
}
echo json_encode($response_array);
exit;

?>