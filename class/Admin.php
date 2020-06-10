<?php
include_once 'Database.php';
class Admin extends Database
{

    private $_table = 'pengguna';

    public function __construct()
    {
        parent::__construct();
    }


    public function reg($data,$value)
    {
        $table = $this->_table;
        $query = "SELECT * FROM  $table WHERE nik='$value'";
        // var_dump($query);
        // die;
        $result = $this->conn->query($query);
        $check = mysqli_num_rows($result);

        if ($check > 0) {
            echo ('<script LANGUAGE="JavaScript">
            window.alert("Email sudah terdaftar!");
            window.location.href="index.php?page=tambah-pengguna";
            </script>');
        } else {
            // mengambil kolom
            $column = implode(", ", array_keys($data));
            // mengambil nilai
            $valueArrays = array();
            $i = 0;
            foreach ($data as $key => $values) {
                if (is_int($values)) {
                    $valueArrays[$i] = $values;
                } else {
                    $valueArrays[$i] = "'" . $values . "'";
                }
                $i++;
            }

            $values = implode(", ", $valueArrays);
            // INSERT INTO pengguna (id,nik, nama, status, akses, password,created) VALUE('','321522222222222222', 'as', 'Staf TU', 'Guru', 'as',NOW())
            $query = "INSERT INTO $table (id,$column,created) VALUE('',$values,now())";
            // var_dump($query);
            // die;
            $result = mysqli_query($this->conn, $query);

            if ($result > 0) {
                echo ('<script LANGUAGE="JavaScript">
                    window.alert("Berhasil memasukan data");
                    window.location.href="index.php?halaman=kelola_pengguna";
                    </script>');
            }
        }
        // header('Location: index.php?page=master-pengguna');
        return $this;
    }

    public function get_code()
    {
        # code...
    }

    public function registrasi($nik,$nama,$jk,$status,$akses,$password){
        $password = md5($password); 
        
        $query ="SELECT * FROM pengguna WHERE nik='$nik' OR nama='$nama'";
        var_dump($query);
        die;
        $result = $this->conn->query($query);
        $count = mysqli_num_rows($result);
        if( $count > 0 )
        {
            echo "<script>alert('NIK atau nama sudah pernah digunakan')</script>";
        }
        else
        {
            $query1="INSERT INTO pengguna SET nik='$nik', nama='$nama', jk='$jk', status='$status', akses='$akses', password='$password', created=now()";

            $result = mysqli_query($this->conn, $query1);
            if( $result )
            {
                echo "<script>alert('Berhasil Anda Berhasil Registrasi');</script>";
            }   
        }  
    }

    public function tampil($table, $data, $value){
        if($data==""){
            $query= "SELECT * FROM $table";
            $result = $this->conn->query($query);
        }
        else{
            $query="SELECT * FROM $table WHERE $data='$value'";
            $result = $this->conn->query($query);
        }
        return $result;
    }
    public function hapus($table,$kolom, $value){


    }

    public function hapus_pengguna($id)
    {
        $query = "DELETE FROM $this->_table WHERE id='$id'";
        $result = $this->conn->query($query);
        if ($result == TRUE) {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Pengguna Dengan Kode ID(' . $id . ') Berhasil dihapus");
                window.location.href="index.php?halaman=kelola_pengguna";
                </script>');
        } else {
            echo ('<script LANGUAGE="JavaScript">
            window.alert("Pengguna Dengan Kode ID(' . $id . ') Gagal dihapus");
            window.location.href="index.php?halaman=kelola_pengguna&id='.$id.'";
            </script>');
        }
    }
    

    public function edit_pengguna($data, $clause){
        foreach ($clause as $value) {
            $kd = $value;
        }

        foreach ($data as $key => $value) {
            $field .= $key . "='" . $value . "',";
        }
        $field = substr($field, 0, -2);
        foreach ($clause as $key => $value) {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $query = 'UPDATE ' . $this->_table . ' SET ' . $field . "' WHERE " . $condition;

        $result = mysqli_query($this->conn, $query);
        if ($result == TRUE) {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Kode (' . $kd . ') Berhasil diperbarui");
                window.location.href="index.php?halaman=kelola_pengguna";
                </script>');
        } else {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Kode (' . $kd . ') Gagal diperbarui");
                window.location.href="index.php??halaman=kelola_pengguna&id=' . $kd . '";
                </script>');
        }
    }

    public function upload_struktur($tabel,$file1,$ket,$link){
        $query = "UPDATE $tabel SET struktur='$file1' WHERE ket='$ket'";
        $result = mysqli_query($this->conn, $query);
        if ($result == TRUE) {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Berhasil Memasukan '.$ket.' Baru");
                window.location.href="index.php?halaman='.$link.'";
                </script>');
        } else {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Gagal diperbarui struktur yayasan");
                window.location.href="index.php?halaman='.$link.'";
                </script>');
        }
    }

    public function upload($table,$subjek,$kategori,$keterangan,$file,$extension,$size,$link){
       $query="INSERT INTO $table VALUES ('','$subjek','$kategori','$keterangan','$file','$extension','$size',now())";
       $result = mysqli_query($this->conn, $query);
       if ($result == TRUE) {
        echo ('<script LANGUAGE="JavaScript">
            window.alert("Berhasil Memasukan file baru");
            window.location.href="index.php?halaman='.$link.'";
            </script>');
        } else {
        echo ('<script LANGUAGE="JavaScript">
            window.alert("Gagal ditambahkan");
            window.location.href="index.php?halaman='.$link.'";
            </script>');
        }
    }

    
    public function edit_file($id,$subjek,$kategori,$keterangan,$file,$extension,$size,$link){
        $query = "UPDATE file SET subjek='$subjek', kategori='$kategori', keterangan='$keterangan', file='$file', type='$extension', size='$size' WHERE id='$id'";
        $result = mysqli_query($this->conn, $query);
        if ($result == TRUE) {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Berhasil Merubah file");
                window.location.href="index.php?halaman='.$link.'";
                </script>');
            } else {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Gagal Merubah data");
                window.location.href="index.php?halaman='.$link.'";
                </script>');
            }
        
    }

    
    public function edit_file_lama($id,$subjek,$kategori,$keterangan,$link){
        $query = "UPDATE file SET subjek='$subjek', kategori='$kategori', keterangan='$keterangan'  WHERE id='$id'";
        $result = mysqli_query($this->conn, $query);
        if ($result == TRUE) {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Berhasil Merubah file");
                window.location.href="index.php?halaman='.$link.'";
                </script>');
            } else {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Gagal Merubah data");
                window.location.href="index.php?halaman='.$link.'";
                </script>');
            }
        
        
    }

    public function hapus_file($table,$id)
    {
        $query = "DELETE FROM $table WHERE id='$id'";
        $result = $this->conn->query($query);
        if ($result == TRUE) {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Pengguna Dengan Kode ID(' . $id . ') Berhasil dihapus");
                window.location.href="index.php?halaman=kelola_pengguna";
                </script>');
        } else {
            echo ('<script LANGUAGE="JavaScript">
            window.alert("Pengguna Dengan Kode ID(' . $id . ') Gagal dihapus");
            window.location.href="index.php?halaman=kelola_pengguna&id='.$id.'";
            </script>');
        }
    }
    public function hapus_modul($table,$id)
    {
        $query = "DELETE FROM $table WHERE id='$id'";
        $result = $this->conn->query($query);
        if ($result == TRUE) {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Pengguna Dengan Kode ID(' . $id . ') Berhasil dihapus");
                window.location.href="index.php?halaman=kelola_modul";
                </script>');
        } else {
            echo ('<script LANGUAGE="JavaScript">
            window.alert("Pengguna Dengan Kode ID(' . $id . ') Gagal dihapus");
            window.location.href="index.php?halaman=kelola_modul&id='.$id.'";
            </script>');
        }
    }

    

    public function upload_link($table,$link,$judul,$jenis,$ket,$link2){
       $query="INSERT INTO $table VALUES ('','$link','$judul','$jenis','$ket',now())";
       $result = mysqli_query($this->conn, $query);
       if ($result == TRUE) {
        echo ('<script LANGUAGE="JavaScript">
            window.alert("Berhasil Memasukan file baru");
            window.location.href="index.php?halaman='.$link2.'";
            </script>');
        } else {
        echo ('<script LANGUAGE="JavaScript">
            window.alert("Gagal ditambahkan");
            window.location.href="index.php?halaman='.$link2.'";
            </script>');
        }
    }

    
    
    public function upload_modul($table,$judul,$modul,$ket,$file,$extension,$size,$link2){
       $query="INSERT INTO $table VALUES ('','$judul','$modul','$ket','$file','$extension','$size',NOW())";
       $result = mysqli_query($this->conn, $query);

        if ($result == TRUE) {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Berhasil Memasukan file baru");
                window.location.href="index.php?halaman='.$link2.'";
                </script>');
            } else {
            echo ('<script LANGUAGE="JavaScript">
                window.alert("Gagal ditambahkan !");
                window.location.href="index.php?halaman='.$link2.'";
                </script>');
            } 
    }

         
    public function open_forum($table,$subjek,$file,$extension,$size,$kategori,$nama,$konten){
       $query="INSERT INTO $table VALUES ('','$subjek','$file','$extension','$size','$kategori',now(),'$nama','$konten')";
 
       $result = mysqli_query($this->conn, $query);

       if ($result == TRUE) {
        echo ('<script LANGUAGE="JavaScript">
            window.alert("Berhasil Memasukan file baru");
            window.location.href="index.php?halaman=forum";
            </script>');
        } else {
        echo ('<script LANGUAGE="JavaScript">
            window.alert("Gagal ditambahkan !");
            window.location.href="index.php?halaman=tambah_forum";
            </script>');
        } 

    }





    // OLD

    
    public function upload_xxx($table,$subjek,$kategori,$keterangan,$file,$extension,$size){
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
    public function upload_link_xxx($table,$link,$judul,$jenis,$ket){
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



     
    public function open_forum_xxx($table,$subjek,$file,$extension,$size,$kategori,$nama,$konten){
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


    public function edit_file_lama_xxx($id,$subjek,$kategori,$keterangan){
        $conn = $this->_db->getConnection();
        $query = "UPDATE file SET subjek='$subjek', kategori='$kategori', keterangan='$keterangan'  WHERE id='$id'";
        // var_dump($query);
        // die;
        $result = $conn->query($query);
        if($result == true){
            echo "<script>alert('Anda Berhasil memperbarui file');location.href='kelola_file.php'</script>";
        }
        
    }

    public function edit_file_xxx($id,$subjek,$kategori,$keterangan,$file,$extension,$size){
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