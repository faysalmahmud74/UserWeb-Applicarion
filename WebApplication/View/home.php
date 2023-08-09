<?php 
require_once '../Model/db.php';
include '../Controller/header.php';

session_start();

if(isset($_SESSION['username']) && isset($_SESSION['password'])){
  echo "Welcome ".$_SESSION['username']."!";
  echo "";
} else {
  echo "Please LogIn first!!!";
  header("Location:../Controller/login.php");
  //echo "Please LogIn first!!!";
}
?>

<?php   include'../Controller/sidebar.php';

include '../Controller/footer.php'; ?>