<?php

class ADMIN {

    private $db;

    function __construct($DB_con) {
        $this->db = $DB_con;
    }

    public function allusers() {

        $sth = $this->db->prepare("SELECT user_id,user_name,user_email,user_pass FROM users");
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
    }
    
    public function deleteuser(){
        
     if (@$_GET['action']=="delete"){
            
    $res = $this->db->query("DELETE FROM users WHERE user_id=".$_GET['id']); 
   } 
    return @$res;
   
    
    }
public function update($fname,$uemail)
 {
     if (@$_GET['action']=="edit"){
  $res = $this->db->query("UPDATE users SET user_name='$fname',user_email='$uemail' WHERE user_id=".$_GET['id']);
  return $res;
     }
 }
 
public function validate($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
} 
    
    
}
