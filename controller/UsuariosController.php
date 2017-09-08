<?php

class UsuariosController extends ControladorBase{
 
    public function __construct() {
        parent::_construct();
        
    }
    
    public function index(){
        
        $usuario = new Usuario("user");
        
        $allusers = $usuario->getAll();
        
        $this->view("index",array(
                "allusers"=>$allusers
                , "Hola" => "Ejemplo MVC"
                ));
    }
    
    public function crear() {
        
        if(isset($_POST["email"])){
            
            $usuario = new Usuario();
            
            $email = $_POST["email"];
            $alias = $_POST["alias"];
            $pass = sha1($_POST["pass"]);
            
            $usuario->setAlias($alias);
            $usuario->setEmail($email);
            $usuario->setPass($pass);

            $save = $usuario->agregar();
            
        }
        //Redireccionamos
        $this->redirect("Usuarios","index");           
            
    }
    
    public function borrar(){
         
        if(isset($_POST["id"])){
            
            $id = (int) $_GET["id"];
            
            $usuario = new Usuario();
            $usuario->deleteById($id);
            $this->redirect();
        }
       
    }
}

?>