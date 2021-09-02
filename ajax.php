<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();

if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == "save_type"){
	$save = $crud->save_type();
	if($save)
		echo $save;
}
if($action == "delete_type"){
	$save = $crud->delete_type();
	if($save)
		echo $save;
}
if($action == "save_laundry"){
	$save = $crud->save_laundry();
	if($save)
		echo $save;
}
if($action == "delete_laundry"){
	$save = $crud->delete_laundry();
	if($save)
		echo $save;
}
