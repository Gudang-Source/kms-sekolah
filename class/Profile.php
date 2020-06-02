<?php
include_once 'Database.php';
class Profile extends Database
{

    // private $_table = 'pengguna';

    public function __construct()
    {
        parent::__construct();
    }

    public function upload_struktur($tabel,$file1,$ket){
      var_dump($tabel,$file1,$ket);
      die;
      
        $conn = $this->_db->getConnection();
        $query = "UPDATE $tabel SET struktur='$file1' WHERE ket='$ket'";
        $result = $conn->query($query);
        if($result == true){
            echo "<script>alert('Anda Berhasil memperbarui Struktur organisasi di ".$ket."')</script>";
        }
    }

    
}