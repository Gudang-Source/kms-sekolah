<?php
class Login {
    private $_db;

    public function __construct(){
        $this->_db = Database::getInstance();
    }

    public function login($nik,$pass){
        session_start();
        $conn = $this->_db->getConnection();
        $query= "SELECT * FROM pengguna WHERE nik='$nik'";
        $result = $conn->query($query);
        $fetch = mysqli_fetch_assoc($result);
        
        
        if(password_verify($pass, $fetch['password'])){
          
            
            if($fetch['akses']=='admin'){
                $_SESSION['admin']= $fetch['id'];
                $_SESSION['nik']= $fetch['nik'];
                $_SESSION['nama']= $fetch['nama'];
                $_SESSION['akses']= $fetch['akses'];
                header('Location: halaman/admin/p_admin.php');
            }
            elseif($fetch['akses']=='user'){
                $_SESSION['user']= $fetch['id'];
                $_SESSION['nik']= $fetch['nik'];
                $_SESSION['nama']= $fetch['nama'];
                $_SESSION['akses']= $fetch['akses'];
                header('Location: halaman/user/p_user.php');
            }
        }
        else {
            echo "<script>alert('nik dan password Salah')</script>";
        }
        return $result;
    }

  
}