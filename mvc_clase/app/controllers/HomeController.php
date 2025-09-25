<?php
namespace app\controllers;

class HomeController{


   public function index(){
        return $this->view('HomeView',['title'=>'Home','mensaje'=>"hola"]);
    }


    public function view($vista,$data=[]){
        //require_once("../app/views/HomeView.php");

        extract($data);
        if(file_exists("../app/views/$vista.php")){
            
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        }
        else{
            echo "vista no encotrada ../app/views/$vista.php";
        }
        return "hola desde la pagina Home";


    }

}

?>