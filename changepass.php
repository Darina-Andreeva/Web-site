<?php
require 'app' . DIRECTORY_SEPARATOR . 'connection.php';
require 'view' . DIRECTORY_SEPARATOR . 'menu.php';
require 'template' . DIRECTORY_SEPARATOR . 'template.php';
require 'view' . DIRECTORY_SEPARATOR . 'changepss-form.php';
$forgot = new USER($DB_con);
if (isset($_POST['submit'])) {
    $umail = $forgot->validate($_POST['email']);
    $upassnew = $forgot->validate($_POST['upassnew']);
    if (empty($umail)) {
        echo $errors[] = "<p class='red'>The email is required.</p>";
    } elseif (!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
        echo $errors[] = "<p class='red'>The email doesn't exist.</p>";
    }
    if (empty($upassnew)) {
        echo $errors[] = "<p class='red'>The  new password is required.</p>";
    }
    if (!isset($errors)) {
        $forgot->change_password($umail, $upass, $upassnew);
         header("Location: home.php");
    }
}
