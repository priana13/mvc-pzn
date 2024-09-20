<?php 

 namespace Priana\BelajarMvc\Controller;

use Priana\BelajarMvc\Models\Skill;
use ReflectionClass;

 class HomeController extends Controller {

    public function __construct(){

        // echo 'test';
    }

    public function index(){

        $data['nama'] = "Priana Saputra";

        $ref = new ReflectionClass( Skill::class );

        // var_dump( $ref->getMethods() ); die();

        $skills = new Skill();

        $data['skills'] = $skills->get();


        $this->fullView('home' , $data);
    }

    public function about(){

        $data['nama'] = "Priana";

        return $this->fullView('about' , $data );   
    }
  
 }