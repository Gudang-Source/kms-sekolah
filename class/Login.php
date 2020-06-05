<?php
include_once 'Database.php';
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
            $_SESSION['akses'] = $data['akses'];
            $_SESSION['nama'] = $data['nama'];

            // pengarahan halaman sesuai hak akses
            if ($_SESSION['akses'] == 'admin') {
                header('Location: halaman/index.php');
            } else if ($_SESSION['akse'] == 'user') {
                header('Location: halaman/index.php');
            } else {
                die;
            }
        } else {
            echo '<script type="text/javascript">alert("Gagal Login");</script>';
        }
    }

    public function verifikasi($nik, $password_hash)
    {
        $query = "SELECT * FROM {$this->table} WHERE nik='$nik' AND password='$password_hash'";
        var_dump($query);
        die;
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