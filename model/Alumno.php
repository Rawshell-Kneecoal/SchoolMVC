<?php
class Alumno extends EntidadBase{
    private $first_name;
    private $second_name;
    private $first_lastname;
    private $second_lastname;
    private $age;
    private $gender;
    private $enrollment;
    private $id;
    
    public function __construct($adapter) {
        $table="alumno";
        parent::__construct($table, $adapter);
    }


    public static function _forupdate($adapter,$alumno) {
        /* this function receives db connection, alumno object without the connection
        and assigns alumno's attribute value to a new instance created with the database connection
        and returns it as a new object with db connection */
        $instance = new self($adapter);
    
        $instance->setId($alumno->id);   
        $instance->setGender($alumno->gender);
        $instance->setFirstName($alumno->first_name);
        $instance->setSecondName($alumno->second_name);
        $instance->setFirstLastName($alumno->first_lastname);
        $instance->setSecondLastName($alumno->second_lastname);
        $instance->setAge($alumno->age);
        $instance->setEnrollment($alumno->enrollment);

        return $instance;
        
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }


    public function getEnrollment() {
        return $this->enrollment;
    }
 
    public function setEnrollment($enrollment) {
        $this->enrollment = $enrollment;
    }
     
    public function getFirstName() {
        return $this->first_name;
    }
 
    public function setFirstName($name) {
        $this->first_name = $name;
    }

    public function getSecondName() {
        return $this->second_name;
    }
 
    public function setSecondName($name) {
        $this->second_name = $name;
    }

    public function getFirstLastName() {
        return $this->first_lastname;
    }
 
    public function setFirstLastName($name) {
        $this->first_lastname = $name;
    }

    public function getSecondLastName() {
        return $this->second_lastname;
    }
 
    public function setSecondLastName($name) {
        $this->second_lastname = $name;
    }

    public function getAge() {
        return $this->age;
    }
 
    public function setAge($age) {
        $this->age = $age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function save(){
        
        $query="INSERT INTO alumno(id,first_name,second_name,first_lastname,second_lastname,age,gender,enrollment)
                VALUES(NULL,
                       '".$this->first_name."',
                       '".$this->second_name."',
                       '".$this->first_lastname."',
                       '".$this->second_lastname."',
                       '".$this->age."',
                       '".$this->gender."',
                       '".$this->enrollment."');";
        
        $save=$this->db()->query($query);
        return $save;
    }

    public function update(){

        $query = "
            UPDATE `alumno`
            SET 
                `first_name` = '$this->first_name', 
                `second_name` = '$this->second_name',
                `first_lastname` = '$this->first_lastname',
                `second_lastname` = '$this->second_lastname',
                `age` = $this->age,
                `enrollment` = $this->enrollment,
                `gender` = '$this->gender'
                
            WHERE `id` = $this->id;
        ";
        
        $save=$this->db()->query($query); 

        /* echo '<pre>';
        var_dump($save);
        echo '<br /><br />';
        echo '</pre>'; */

        return $save;
    }

    public function delete(){

        $query = "
            UPDATE `alumno`
            SET 
                `first_name` = '$this->first_name', 
                `second_name` = '$this->second_name',
                `first_lastname` = '$this->first_lastname',
                `second_lastname` = '$this->second_lastname',
                `age` = $this->age,
                `enrollment` = $this->enrollment,
                `gender` = '$this->gender'
                
            WHERE `id` = $this->id;
        ";
        
        $save=$this->db()->query($query); 

      /*   echo '<pre>';
        var_dump($save);
        echo '<br /><br />';
        echo '</pre>'; */

        return $save;



    }

}
?>
