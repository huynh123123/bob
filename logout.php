<?php
session_start();
session_unset();
session_destroy();

setcookie('user','',time()- 86500,'/');
// xem cookie
header('Location:login.php');
exit();
?>