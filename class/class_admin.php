<?php

class Admin{
    private $_db;

    public function __construct(){
        $this->_db = Database::getInstance();
    }

    public function registrasi($nik,$nama,$jk,$status,$akses,$password){
        $conn = $this->_db->getConnection();
        $password = password_hash($password, PASSWORD_DEFAULT); 
        
        $query ="SELECT * FROM pengguna WHERE nik='$nik' OR nama='$nama'";
        $result = $conn->query($query);
        $count = mysqli_num_rows($result);
        if( $count > 0 )
        {
            echo "<script>alert('NIK atau nama sudah pernah digunakan')</script>";

        }
        else
        {
            $query1="INSERT INTO pengguna SET nik='$nik', nama='$nama', jk='$jk', status='$status', akses='$akses', password='$password', created=now()";

            $result = mysqli_query($conn, $query1);
            if( $result )
            {
                echo "<script>alert('Berhasil Anda Berhasil Registrasi');</script>";
            }   
          
        }  
    }

    public function tampil($table, $data, $value){
        if($data==""){
            $conn=$this->_db->getConnection();
            $query= "SELECT * FROM $table";
            $result = $conn->query($query);
        }
        else{
            $conn = $this->_db->getConnection();
            $query1="SELECT * FROM $table WHERE $data='$value'";
            $result = $conn->query($query1);
        }
        return $result;
    }
    public function hapus($table,$kolom, $value){
        $conn = $this->_db->getConnection();
        $query = " DELETE FROM $table WHERE $kolom='$value'";
        $result = $conn->query($query);
        echo "<script>alert('Data telah dihapus');</script>";

    }

    public function edit_pengguna($id,$nik,$nama,$jk,$status,$akses){
        $conn = $this->_db->getConnection();
        $query = "UPDATE pengguna SET nama='$nama', jk='$jk', status='$status', akses='$akses' WHERE id='$id'";
        $result = $conn->query($query);
        if($result == true){
            echo "<script>alert('Anda Berhasil memperbarui pengguna');location.href='kelola_pengguna.php'</script>";
        }
        
    }

    public function upload($table,$subjek,$kategori,$keterangan,$file,$extension,$size){
        $conn = $this->_db->getConnection();
       $query="INSERT INTO $table VALUES ('','$subjek','$kategori','$keterangan','$file','$extension','$size',now())";
        $result = mysqli_query($conn, $query);
        // var_dump($query);
        // die;
        if($result)
        {
            echo "<script>alert('Anda Berhasil melakukan upload file');location.href='kelola_file.php'</script>";
        }  
    }
    public function upload_link($table,$link,$judul,$jenis,$ket){
        $conn = $this->_db->getConnection();
       $query="INSERT INTO $table VALUES ('','$link','$judul','$jenis','$ket',now())";
        $result = mysqli_query($conn, $query);
        // var_dump($query);
        // die;
        if($result)
        {
            echo "<script>alert('Berhasil memasukan link');</script>";
        }  
    }

    
    public function upload_modul($table,$judul,$modul,$ket,$file,$extension,$size){
        $conn = $this->_db->getConnection();
       $query="INSERT INTO $table VALUES ('','$judul','$modul','$ket','$file','$extension','$size',now())";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            echo "<script>alert('Anda Berhasil menambahkan modul $modul');location.href='kelola_modul.php'</script>";
        }  
    }

     
    public function open_forum($table,$subjek,$file,$extension,$size,$kategori,$nama,$konten){
        $conn = $this->_db->getConnection();
       $query="INSERT INTO $table VALUES ('','$subjek','$file','$extension','$size','$kategori',now(),'$nama','$konten')";
        $result = mysqli_query($conn, $query);
        // var_dump($query);
        // die;
        if($result)
        {
            echo "<script>alert('Berhasil memasukan modul');</script>";
        }  
    }

    public function komentar($table,$id_forum,$isi_komentar,$nama){
        $conn = $this->_db->getConnection();
       $query="INSERT INTO $table VALUES ('','$id_forum',now(),'$isi_komentar','$nama')";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            echo "<script>alert('Berhasil mengirim komentar ".$nama."');</script>";
        }  
    }

    public function edit_link($id,$link,$judul,$jenis,$ket){
        $conn = $this->_db->getConnection();
        $query = "UPDATE link SET link='$link', judul='$judul', jenis='$jenis', ket='$ket' WHERE id='$id'";
        $result = $conn->query($query);
        if($result == true){
            echo "<script>alert('Anda Berhasil memperbarui link');location.href='kelola_link.php'</script>";
        }
        
    }

    public function upload_profile($table,$judul,$modul,$file,$extension,$size){
        $conn = $this->_db->getConnection();
       $query="INSERT INTO $table VALUES ('','$judul','$modul','$file','$extension','$size',now())";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            echo "<script>alert('Berhasil memasukan modul');</script>";
        }  
    }

    public function upload_struktur($tabel,$file1,$ket){
        $conn = $this->_db->getConnection();
        $query = "UPDATE $tabel SET struktur='$file1' WHERE ket='$ket'";
        $result = $conn->query($query);
        if($result == true){
            echo "<script>alert('Anda Berhasil memperbarui Struktur organisasi di ".$ket."')</script>";
        }
    }

    public function edit_file_lama($id,$subjek,$kategori,$keterangan){
        $conn = $this->_db->getConnection();
        $query = "UPDATE file SET subjek='$subjek', kategori='$kategori', keterangan='$keterangan'  WHERE id='$id'";
        // var_dump($query);
        // die;
        $result = $conn->query($query);
        if($result == true){
            echo "<script>alert('Anda Berhasil memperbarui file');location.href='kelola_file.php'</script>";
        }
        
    }

    public function edit_file($id,$subjek,$kategori,$keterangan,$file,$extension,$size){
        $conn = $this->_db->getConnection();
        $query = "UPDATE file SET subjek='$subjek', kategori='$kategori', keterangan='$keterangan', file='$file', type='$extension', size='$size' WHERE id='$id'";
        // var_dump($query);
        // die;
        $result = $conn->query($query);
        if($result == true){
            echo "<script>alert('Anda Berhasil memperbarui file');location.href='kelola_file.php'</script>";
        }
        
    }

    public function edit_modul_lama($id,$judul,$modul,$ket){
        $conn = $this->_db->getConnection();
        $query = "UPDATE modul SET judul='$judul', modul='$modul', keterangan='$ket'  WHERE id='$id'";
        // var_dump($query);
        // die;
        $result = $conn->query($query);
        if($result == true){
            echo "<script>alert('Anda Berhasil memperbarui modul $modul');location.href='kelola_modul.php'</script>";
        }
        
    }

    public function edit_modul($id,$judul,$modul,$ket,$file,$extension,$size){
        $conn = $this->_db->getConnection();
        $query = "UPDATE modul SET judul='$judul', modul='$modul', keterangan='$ket', file='$file', type='$extension', size='$size' WHERE id='$id'";
        // var_dump($query);
        // die;
        $result = $conn->query($query);
        if($result == true){
            echo "<script>alert('Anda Berhasil memperbarui file');location.href='kelola_modul.php'</script>";
        }
        
    }



}