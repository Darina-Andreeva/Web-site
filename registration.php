<?php 
require 'app'.DIRECTORY_SEPARATOR.'connection.php';
require 'template'.DIRECTORY_SEPARATOR.'template.php';
require 'view' . DIRECTORY_SEPARATOR . 'menu.php';
require 'view'.DIRECTORY_SEPARATOR.'registration-form.php';
 $test = new USER($DB_con);
if (isset($_POST['submit'])){ 
    $fname= $test->validate($_POST['fname']);
    $lname= $test->validate($_POST['lname']);
    $umail= $test->validate($_POST['email']);
    $uname= $test->validate($_POST['uname']);
    $upass= $test->validate($_POST['password']);
     if(empty($fname)){
      echo  $errors[] = "<p class='red'>The  First name required.</p>";
    }
    elseif(!preg_match("/^([a-zA-Z]+|[\p{Cyrillic}]+)$/u", $fname)) {
       echo  $errors[] = "<p class='red'>The name field should content only letters.</p>";
    }
    if(empty($lname)){
       echo  $errors[] = "<p class='red'>The Last name required.</p>";
    }
    elseif(!preg_match("/^([a-zA-Z]+|[\p{Cyrillic}]+)$/u", $lname)) {
       echo  $errors[] = "<p class='red'>The name field should content only letters.</p>";
    }
    if(empty($umail)){
       echo  $errors[] = "<p class='red'>The email is required.</p>";
    }
    elseif(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
       echo  $errors[] = "<p class='red'>The email doesn't exist.</p>";
    }
     if(empty($uname)){
      echo   $errors[] = "<p class='red'>The user name required.</p>";
    }
    elseif(!preg_match("/^([a-zA-Z]+|[\p{Cyrillic}]+)$/u", $uname)) {
      echo   $errors[] = "<p class='red'>The name field should content only letters.</p>";
    }
    if(empty($upass)) {
     echo $errors[] = "<p class='red'>The password is required.</p>";
    }
    elseif (mb_strlen($upass) < 4) {
       echo  $errors[] = "<p class='red'>The password must be bigger then 4 symbols.</p>";
    }
        if(!isset($errors)){   
        
     $test->register($fname,$lname,$uname,$umail,$upass);
      header("Location: home.php");
}
}