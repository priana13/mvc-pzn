<?php 

 namespace Priana\BelajarMvc\Controller;


 class HomeController extends Controller {

    public function __construct(){

        // echo 'test';
    }

    public function index(){

        $data['nama'] = "Priana";

        return $this->view('home' , $data );      
    }

    public function about(){

        $data['nama'] = "Priana";

        return $this->view('about' , $data );   
    }
  
 }