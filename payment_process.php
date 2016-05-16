<?php
session_start();
session_destroy();
session_start();
$_SESSION['payment_success_message']=1;
header("Location: index.php");

?>