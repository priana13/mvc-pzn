<?php  
namespace Priana\BelajarMvc\Models;

use PDO;

class Model {

    protected $pdo;

    protected $table;

    public function __construct(){

        $host = 'localhost';  // ganti dengan host database
        $db   = 'belajar_mvc';  // ganti dengan nama database
        $user = 'root';  // ganti dengan username database
        $pass = 'root';  // ganti dengan password database

        $dsn = $this->getDns($host, $db);

        try {
            $this->pdo = new PDO($dsn, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi database gagal: " . $e->getMessage());
        }


        if (!isset($this->table)) {
            $this->table = strtolower((new \ReflectionClass(static::class))->getShortName()) . "s";
        }        
        
    }

    public function getTableName(): void
    {

        $class_name = explode("\\" , get_class($this) ) ;

        $this->table =  end( $class_name )  . "s";
    }


    public function get(){
      

        $stmt  = $this->pdo->query("SELECT * FROM $this->table");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDns($host , $db): string
    {

        return "mysql:host=$host;dbname=$db;charset=utf8mb4";
    }

}