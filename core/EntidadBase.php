<?php
class EntidadBase{
    private $table;
    private $db;
    private $conectar;
 
    public function __construct($table, $adapter) {
        $this->table=(string) $table;
        
        /* Commented three lines for improvements */
        /* require_once 'Conectar.php';
        $this->conectar=new Conectar();
        $this->db=$this->conectar->conexion(); */
        $this->conectar = null;
        $this->db = $adapter;

    }
     
    public function getConetar(){
        return $this->conectar;
    }
     
    public function db(){
        return $this->db;
    }

    public function getAll(){
        $query=$this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
          
        //Devolvemos el resultset en forma de array de objetos
        while ($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }

        /*
        echo '<prep>';
        var_dump($query);
        echo '</prep>';
        */
        
        return $resultSet;
    }
     
    public function getById($id, $className = NULL){
        $query=$this->db->query("SELECT * FROM $this->table WHERE id=$id");
 
        if($row = $query->fetch_object()) {
           $resultSet=$row;
        }

        if($className != NULL) {
            return $this->cast($resultSet, $className);
        }
        return $resultSet;

    }
     
    public function getBy($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
 
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }
     
    public function deleteById($id){
        $query=$this->db->query("DELETE FROM $this->table WHERE id=$id");
        return $query;
    }
     
    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    }

    protected function cast($instance, $className)
    {
        return unserialize(sprintf(
            'O:%d:"%s"%s',
            \strlen($className),
            $className,
            strstr(strstr(serialize($instance), '"'), ':')
        ));
    }
     
 
    /*
     * Aquí podemos montarnos un montón de métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */
     
}
?>
