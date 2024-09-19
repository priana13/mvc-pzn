<?php 

 namespace Priana\BelajarMvc\Controller;


 class HomeController extends Controller {

    public function __construct(){

        // echo 'test';
    }

    public function index(){

        $data['nama'] = "Priana Saputra";

        $this->fullView('home' , $data);
    }

    public function about(){

        $data['nama'] = "Priana";

        return $this->fullView('about' , $data );   
    }
  
 }