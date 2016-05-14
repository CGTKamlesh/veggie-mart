<?php
function processCartTotal()
{
    $temp_sub_total=0.00;
    foreach($_SESSION['cart'] as $key=>$value){
        $temp_sub_total += $value['cal_price'];
    }
    
    $sub_total=number_format($temp_sub_total,'2','.','');
    $_SESSION['sub_total']=$sub_total;
    if($temp_sub_total<500){
        $_SESSION['shipping_flag']=1;
        if(isset($_SESSION['coupon_flag']) && ($_SESSION['coupon_flag']==1)){
            $coupon_amount=$_SESSION['coupon_amount'];
            $total_amount=number_format(($sub_total-$coupon_amount)+25,2,'.','');
        }
        else{
            $total_amount=number_format($sub_total+25,2,'.','');
        }
        $_SESSION['total']=$total_amount;
    }
    else{
        $_SESSION['shipping_flag']=0;
        if(isset($_SESSION['coupon_flag']) && ($_SESSION['coupon_flag']==1)){
            $coupon_amount=$_SESSION['coupon_amount'];
            $_SESSION['total']=number_format($sub_total-$coupon_amount,2,'.','');
        }
        else{
            $_SESSION['total']=$sub_total;   
        }
    }
}

?>