<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$backend = $root.'/spotx/backend'; /*>>> usdev = '/en/satfi/backend' | local = '/satfi/backend' <<<*/
require_once($backend.'/multiform_db_pdo.php');
require_once($backend.'/form_check.php');
require_once($backend.'/utmz_cookie_parser.php');

$success = '../thank-you.html';

$form_check = new Form_Check();
$utmz = new Utmz_cookie_parser();

$url = $_SERVER['PHP_SELF'];
$name = $email = $phone = $terms = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST['name']);
	$email = test_input($_POST['email']);
	$phone = test_input($_POST['phone']);
	$agree = test_input($_POST['agree']);
	$callTime = test_input($_POST['call-time']);
	$comments = test_input($_POST['comments']);
	
	$print_form_fields = $name.'\n' .$email.'\n' .$phone.'\n' .$agree.'\n' .$callTime.'\n'.$comments.'\n';
	echo '<script type="text/javascript">alert("'.$print_form_fields.'");</script>';
 	header("Refresh:5;url=$success");
} else {
	$form_check->set_timestamp('buy-now-form');
}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>