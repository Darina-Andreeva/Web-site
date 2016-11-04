<?php
require 'app' . DIRECTORY_SEPARATOR . 'connection.php';
require 'template' . DIRECTORY_SEPARATOR . 'template.php';
require 'view' . DIRECTORY_SEPARATOR . 'menu.php';
$user = new USER($DB_con);
$sess_name = 'my_cookie';
 setcookie('resource', $sess_name,  time() + (60 * 60 * 8), '/', null, null, true);
if($user->is_loggedin()!="") {  
$user->redirect('home.php');
}
@$user_id =$_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<h1>Please log in.</h1>


