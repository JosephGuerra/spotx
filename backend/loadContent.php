<!DOCTYPE html>
<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$dir = pathinfo($_SERVER['PHP_SELF']);
require_once('submitForm.php');
$index = $dir['dirname'];
$submit = 'backend/submitForm.php';
$images = 'img/';

?>