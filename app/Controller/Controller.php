<?php 

 namespace Priana\BelajarMvc\Controller;

class Controller {

    public function view(string $name , $data = []){

        require __DIR__ . '/../../app/Views/' . $name . '.blade.php';
    }

    public function fullView(string $name , $data = []){

        $this->view('layouts/header');
        $this->view('layouts/navbar');
        $this->view($name , $data );      
        $this->view('layouts/footer');
    }

} 