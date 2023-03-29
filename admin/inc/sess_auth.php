<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
$link .= "://"; 
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['REQUEST_URI'];
if((!isset($_SESSION['userdata']) || $_SESSION['userdata']['role_id'] != 2) && !strpos($link, 'login.php')){
	redirect('admin/login.php');
    exit;
}
if(isset($_SESSION['userdata']) && $_SESSION['userdata']['role_id'] == 2 && strpos($link, 'login.php')){
	redirect('admin/index.php');
}
$module = array('','admin','faculty','student','admin');
if(isset($_SESSION['userdata']) && (strpos($link, 'index.php') || strpos($link, 'admin/')) && $_SESSION['userdata']['role_id'] != 2){
	echo "<script>alert('Access Denied!');location.replace('".base_url.$module[$_SESSION['userdata']['login_type']]."');</script>";
    exit;
}
