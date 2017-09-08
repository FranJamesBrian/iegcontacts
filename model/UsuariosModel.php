<?php

class UsuariosModel extends ModeloBase{
    
    private $table;
    
    public function __construct($table) {
        
        $this->table = (string) $table;
        parent :: __construct($this->$table);
    }
    
    public function getUnUsuario(){
        $query = "SELECT * FROM user where EMAIL = 'frjimcebrian@gmail.com'";
        $usuario = $this->ejecutarSql($query);
        return $usuario;
    }
    
}

?>