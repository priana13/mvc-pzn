<?php  
namespace Priana\BelajarMvc\Models;

use PDO;

class Skill extends Model {

    protected $table = 'skills'; // Nama tabel

    public function get(){

        $stmt  = $this->pdo->query("SELECT * FROM $this->table");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}