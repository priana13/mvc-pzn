<?php 

 namespace Priana\BelajarMvc\Controller;

use Priana\BelajarMvc\Models\Skill;

 class HomeController extends Controller {

    public function __construct(){

        // echo 'test';
    }

    public function index(){

        $data['nama'] = "Priana Saputra";


        $skills = new Skill();

        var_dump( $skills->get() ); die();


        $this->fullView('home' , $data);
    }

    public function about(){

        $data['nama'] = "Priana";

        return $this->fullView('about' , $data );   
    }
  
 }