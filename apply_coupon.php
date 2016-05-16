<?php
session_start();
include 'common_func.php';
$response_array=array();
if(empty($_POST)){
    $response_array=array('success'=>0,'message'=>'Sorry, Please try after some time');
}
else{
    
    $coupon_code=$_POST['coupon_code'];
    if($coupon_code!='happy50'){
        $response_array=array('success'=>0,'message'=>'Enter valid coupon code');
    }
    else{
        $coupon_code_amount=50;
        $sub_total=$_SESSION['sub_total'];
        if($coupon_code_amount<=$sub_total){
            $_SESSION['coupon_flag']=1;
            $_SESSION['coupon_code']=$coupon_code;
            $_SESSION['coupon_amount']=number_format($coupon_code_amount,2,'.','');
            processCartTotal();
            $_SESSION['show_coupon_message']=1;
            $response_array=array('success'=>1);
        }
        else{
            $response_array=array('success'=>0,'message'=>'Sorry, Coupon Amount must be less than total order amount');
        }
        
    }
}
echo json_encode($response_array);
exit;

?>