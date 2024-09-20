<?php  
namespace Priana\BelajarMvc\Models;

use PDO;

class Model {

    protected $pdo;

    public function __construct(){

        $host = 'localhost';  // ganti dengan host database
        $db   = 'belajar_mvc';  // ganti dengan nama database
        $user = 'root';  // ganti dengan username database
        $pass = 'root';  // ganti dengan password database

        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

        try {
            $this->pdo = new PDO($dsn, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi database gagal: " . $e->getMessage());
        }
    }

}