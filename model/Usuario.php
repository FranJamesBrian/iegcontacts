<?php

class Usuario extends EntidadBase{
    
     //put your code here
    private $id;
    private $alias;
    private $email;
    private $pass;
    private $name;

    public function __contruct($tabla){
       
          $tabla = "user";
          parent::__construct($tabla);
        
    }

    public function getId(){
        return $this->id;

    }

    public function getEmail(){
        
        return $this->email;
    }
    public function getAlias(){
        return $this->alias;
    } 

    public function getPass(){
        return $this->pass;
    } 

    public function setId($id){
         $this->id = $id;

    }

    public function setEmail($correo){
        $this->email = $correo;
    }
    
    public function setAlias($alias){
        $this->alias = $alias;
    } 

    public function setPass($pass){
        $this->pass = $pass;
    }
    
    public function agregar(){
        $query = "INSERT INTO user (id,alias,email,pass) VALUES (NULL,'"."$this->alias".','."$this->email".','."$this->pass".')';
        
        $save = $this->db()->query($query);
        return $save;
    }
 }



?>

