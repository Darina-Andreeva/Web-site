<?php
require 'app' . DIRECTORY_SEPARATOR . 'connection.php';
require 'view' . DIRECTORY_SEPARATOR . 'menu.php';
require 'view' . DIRECTORY_SEPARATOR . 'login-form.php';
require 'template' . DIRECTORY_SEPARATOR . 'template.php';

?>
<div class="input-group a">
<a href='registration.php' class="log">Registration</a><br>
<a href='changepass.php' class="log">Change password</a>
</div>


<?php
$test = new USER($DB_con);

if (isset($_POST['submit'])) {
    $uname = $test->validate($_POST['uname']);
    $umail = $test->validate($_POST['email']);
    $upass = $test->validate($_POST['password']);
    if(empty($uname)){
      echo  $errors[] = "<p class='red'>The  First name required.</p>";
    }
    elseif(!preg_match("/^([a-zA-Z]+|[\p{Cyrillic}]+)$/u", $uname)) {
       echo  $errors[] = "<p class='red'>The name field should content only letters.</p>";
    }
     if(empty($umail)){
       echo  $errors[] = "<p class='red'>The email is required.</p>";
    }
    elseif(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
       echo  $errors[] = "<p class='red'>The email doesn't exist.</p>";
    }
     if(empty($upass)) {
     echo $errors[] = "<p class='red'>The password is required.</p>";
    }
    elseif (mb_strlen($upass) < 4) {
       echo  $errors[] = "<p class='red'>The password must be bigger then 4 symbols.</p>";
    }
     if(!isset($errors)){ 
      $test->login($uname, $umail, $upass);
     }
}

