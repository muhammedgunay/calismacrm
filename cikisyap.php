<?php
session_start();
unset($_SESSION['seskullanici']);
unset($_SESSION['sessifre']);

if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}
?>