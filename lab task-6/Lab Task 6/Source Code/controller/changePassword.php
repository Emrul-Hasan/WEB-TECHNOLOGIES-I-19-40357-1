<?php 
session_start();
require_once '../model/model.php';

if(isset($_POST['submit'])) {
	$data['password'] = $_POST['password'];
	$s= $_SESSION['username'];
  if (pass($s,$data)) {
  	header('Location: ../viewProfile.php');
  }
} 
else {
	echo '<p>You are not allowed to proceed</p>';
}

 ?>
