<?php session_start();
if(!isset($_SESSION["userName"]))
{
	header('Location:Login.php');
}
?>