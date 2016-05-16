<?php
session_start();
include 'common_func.php';

if(isset($_POST['name']) && isset($_POST['abbr']) && isset($_POST['icon']) && isset($_POST['price']) && isset($_POST['quantity']) && isset($_POST['option'])){
    $name=$_POST['name'];
    $abbr=$_POST['abbr'];
    $icon=$_POST['icon'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $option=$_POST['option'];
    $response_array=array();
    
    if(isset($_SESSION['cart'])){
        if(isset($_SESSION['cart'][$abbr])){
            $_SESSION['cart'][$abbr]['quantity']=$new_quantity=$_SESSION['cart'][$abbr]['quantity']+$quantity;
            $_SESSION['cart'][$abbr]['cal_price']=number_format($price*$new_quantity,2,'.','');
            $total_item_in_cart=count($_SESSION['cart']);
            $response_array=array('success'=>1,'total_cart'=>$total_item_in_cart);
        }
        else{
            //** add new entry in session
            $_SESSION['cart'][$abbr]=array();
            $_SESSION['cart'][$abbr]['name']=$name;
            $_SESSION['cart'][$abbr]['icon']=$icon;
            $_SESSION['cart'][$abbr]['price']=$price;
            $_SESSION['cart'][$abbr]['quantity']=$quantity;
            $_SESSION['cart'][$abbr]['option']=$option;
            $_SESSION['cart'][$abbr]['cal_price']=number_format($price*$quantity,2,'.','');
            $total_item_in_cart=count($_SESSION['cart']);
            $response_array=array('success'=>1,'total_cart'=>$total_item_in_cart);
        }
    }
    else{
        $_SESSION['cart']=array();
        $_SESSION['cart'][$abbr]=array();
        $_SESSION['cart'][$abbr]['name']=$name;
        $_SESSION['cart'][$abbr]['icon']=$icon;
        $_SESSION['cart'][$abbr]['price']=$price;
        $_SESSION['cart'][$abbr]['quantity']=$quantity;
        $_SESSION['cart'][$abbr]['option']=$option;
        $_SESSION['cart'][$abbr]['cal_price']=number_format($price*$quantity,2,'.','');
        $total_item_in_cart=count($_SESSION['cart']);
        $response_array=array('success'=>1,'total_cart'=>$total_item_in_cart);
    }
    
    processCartTotal();
    
}
else{
    $response_array=array('success'=>0,'message'=>'Sorry, Please try after some time');
}
echo json_encode($response_array);
exit;
?>