<?php 

 namespace Priana\BelajarMvc\Controller;

class Controller {

    public function view(string $name , $data = []){

        require __DIR__ . '/../../app/View/' . $name . '.blade.php';
    }

} 