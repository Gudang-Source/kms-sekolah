<?php
include_once 'class_database.php';
class Login extends Database{

    private $table = "pengguna";
    
    public function __construct()
    {
        parent::__construct();
    }

    public function login($nik,$pass){

        $password_hash = md5($pass);
        $data = $this->verifikasi($nik, $password_hash);
        
        if ($data == TRUE) {
            session_start();
            $_SESSION['nik'] = $data['nik'];

            // pengarahan halaman sesuai hak akses
            if ($_SESSION['akses'] == 'admin') {
                header('Location: pagess/index.php');
            } else if ($_SESSION['akse'] == 'user') {
                header('Location: pages/index.php');
            } else {
                die;
            }
        } else {
            echo '<script type="text/javascript">alert("Gagal Login");</script>';
        }


        // if(password_verify($pass, $fetch['password'])){
        //     if($fetch['akses']=='admin'){
        //         $_SESSION['admin']= $fetch['id'];
        //         $_SESSION['nik']= $fetch['nik'];
        //         $_SESSION['nama']= $fetch['nama'];
        //         $_SESSION['akses']= $fetch['akses'];
        //         header('Location: halaman/admin/p_admin.php');
        //     }
        //     elseif($fetch['akses']=='user'){
        //         $_SESSION['user']= $fetch['id'];
        //         $_SESSION['nik']= $fetch['nik'];
        //         $_SESSION['nama']= $fetch['nama'];
        //         $_SESSION['akses']= $fetch['akses'];
        //         header('Location: halaman/user/p_user.php');
        //     }
        // }
        // else {
        //     echo "<script>alert('nik dan password Salah')</script>";
        // }
        // return $result;
    }

    public function verifikasi($nik, $password_hash)
    {
        $query = "SELECT * FROM {$this->table} WHERE nik='$nik' AND password='$password_hash'";
        $result = $this->conn->query($query);

        if (mysqli_num_rows($result) > 0) {

            // Mengambil email yang melakukan login
            $fetch = mysqli_fetch_assoc($result);
            $email = $fetch['nik'];

            // Melakukan query pengambilan data akes 
            $query = "SELECT * FROM $this->table WHERE nik='$nik'";
            $result = $this->conn->query($query);
            $data = $result->fetch_assoc();
            return $data;
        }
        return FALSE;
    }

  
}