<?php
class AlumnosModel extends ModeloBase{
    private $table;
     
    public function __construct($adapter){
        $this->table="alumnos";
        parent::__construct($this->table, $adapter);
    }
     
    //Metodos de consulta
    public function getUnAlumno(){
        /* $query="SELECT * FROM usuarios WHERE email='emailaddressgoeshere'"; */
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}
?>
