<?php
session_start();
class USER {

    private $db;

    function __construct($DB_con) {
        $this->db = $DB_con;
    }

    public function register($fname, $lname, $uname, $umail, $upass) {
        try {
            $new_password = password_hash($upass, PASSWORD_DEFAULT);

            $stmt = $this->db->prepare("INSERT INTO users(user_name,user_email,user_pass) 
                                                       VALUES(:uname, :umail, :upass)");

            $stmt->bindparam(":uname", $uname);
            $stmt->bindparam(":umail", $umail);
            $stmt->bindparam(":upass", $new_password);
            $stmt->execute();

            return $stmt;
       
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    protected $userIsAdmin = false;

    public function user_is_admin() {
        return $this->userIsAdmin;
    }

    public function login($uname, $umail, $upass) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE user_name=:uname AND user_email=:umail LIMIT 1");
            $stmt->execute(array(':uname' => $uname, ':umail' => $umail));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                if (password_verify($upass, $userRow['user_pass'])) {
                    $_SESSION['user_session'] = $userRow['user_id'];
                    if ($uname == "admin") {
                        $this->userIsAdmin = true;
                        header("Location: admin.php");
                        exit;
                    }
                    header("Location: home.php");
                    exit;
                } else {
                    return false;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

public function is_loggedin() {  
if (isset($_SESSION['user_session'])) {
return true;
}
}
public function redirect($url) {
header("Location: $url");
}

public function logout() {
session_destroy();
unset($_SESSION['user_session']);
return true;
}

public function validate($data) {
$data = trim($data);
$data = htmlspecialchars($data);
$data = stripcslashes($data);
return $data;
}
 public function change_password($umail,$upassnew) {
      try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE user_email= :umail ");
            $stmt->bindparam(":umail", $umail);
            $stmt->execute();
            $userRow = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($userRow  > 0) {
            $upassnew = password_hash($upassnew, PASSWORD_DEFAULT); 
            $new= $this->db->prepare("UPDATE users SET user_pass= :upassnew WHERE user_email=:umail ");
            $new->bindparam(":upassnew", $upassnew);
            $new->bindparam(":umail", $umail);
            $new->execute();

            return true;
            }
   
     } catch (PDOException $e) {
            echo $e->getMessage();
        }
     
 }
}