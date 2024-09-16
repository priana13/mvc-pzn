<?php 

 namespace Priana\BelajarMvc\Controller;


 class HomeController {

    public function __construct(){

        // echo 'test';
    }

    public function index(){

        return "ini adalah home controller";
    }

    public function hello(){

        return "ini adalah home controller : Hello";
    }

    public function about(){

        return "ini adalah home controller : About";
    }
 }