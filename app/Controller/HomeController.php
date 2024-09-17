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

    public function hello(){

        return "ini adalah home controller : Hello";
    }

    public function about(){

        return "ini adalah home controller : About";
    }
 }