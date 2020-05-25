<?php
class Database{
    private static $INSTANCE=null;
    private $mysqli,
     $HOST ='localhost',
     $USER ='root',
     $PASS ='',
     $DBNAME ='db_kms';

     public function __construct(){
         $this->mysqli = new mysqli($this->HOST, $this->USER,$this->PASS,$this->DBNAME);
          if(mysqli_connect_error()){
              die('gagal koneksi');
          }
     }

     public static function getInstance(){
         if(!isset(self::$INSTANCE)){
             self::$INSTANCE = new Database();
         }
         return self::$INSTANCE;
     }

     // Untuk memberikan koneksi ke setiap class dan funtion
    public function getConnection()
    {
     return $this->mysqli;
    }
}

// $db =Database::getInstance();
// var_dump($db);

?>