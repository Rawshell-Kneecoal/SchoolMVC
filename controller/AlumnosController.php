<?php

use Intervention\Image\ImageManagerStatic as Image; 

class AlumnosController extends ControladorBase{

    public $conectar;
    public $adapter;
    
    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }
     
    public function index(){

        $alumno = new Alumno($this->adapter);
        $all_alumnos = $alumno->getAll();
         
        //Cargamos la vista index y le pasamos valores
        $this->view("index",array("all_alumnos"=>$all_alumnos));
    }

    public function show() {

        /* Next lines used for debugging */
        /* echo '<pre>';
        var_dump($_GET);
        echo '<br /><br />';
        echo '</pre>'; */

        /* Next lines used for composer exercise */
        /* $image = Image::make('public/images/unicorn.png')->resize(500, 300)->save('public/images/unicornResized.png', 100);
        echo '<img src="public/images/unicornResized.png"/>'; */
        
        $id_alumno = intval($_GET["id"]);
        $alumno = new Alumno($this->adapter);

        /* getById is in entidadBase */
        $dataAlumno = $alumno->getById($id_alumno);

        //Cargamos la vista index y le pasamos valores
        $this->view("showById", array('dataAlumno' => $dataAlumno));

    }

    public function create() {

        $newAlumno = new Alumno($this->adapter);
        $newAlumno->setFirstName($_POST["first_name"]);
        $newAlumno->setSecondName($_POST["second_name"]);
        $newAlumno->setFirstLastName($_POST["first_lastname"]);
        $newAlumno->setSecondLastName($_POST["second_lastname"]);
        $newAlumno->setAge($_POST["age"]);
        $newAlumno->setEnrollment($_POST["enrollment"]);
        $newAlumno->setGender($_POST["gender"]);   
        $newAlumno->save();

        $all_alumnos = $newAlumno->getAll();
        $this->view("index",array("all_alumnos"=>$all_alumnos));

    }

    public function edit(){

        $alumno = new Alumno($this->adapter);

        /* dataAlumno will get requested object alumno corresponding to a specific id, but this object will not have the db connection */
        $dataAlumno = $alumno->getById($_POST["id"]);
        
        /* next line will receive alumno object (with db connection) returned by forupdate() */
        $updateAlumno = Alumno::_forupdate($this->adapter,$dataAlumno);
        $updateAlumno->setFirstName($_POST["first_name"]);
        $updateAlumno->setSecondName($_POST["second_name"]);
        $updateAlumno->setFirstLastName($_POST["first_lastname"]);
        $updateAlumno->setSecondLastName($_POST["second_lastname"]);
        $updateAlumno->setAge($_POST["age"]);
        $updateAlumno->setEnrollment($_POST["enrollment"]);
        $updateAlumno->setGender($_POST["gender"]);
        $updateAlumno->update();

        $all_alumnos = $updateAlumno->getAll();
        $this->view("index",array("all_alumnos"=>$all_alumnos));
 
    }
     
    public function delete(){

        $id_alumno = intval($_POST["id"]);
        $alumno = new Alumno($this->adapter);

        /* getById is in entidadBase */
        $dataAlumno = $alumno->getById($id_alumno);
        $deleteAlumno = Alumno::_forupdate($this->adapter,$dataAlumno);
        $deleteAlumno->deleteById($id_alumno);

        $all_alumnos = $deleteAlumno->getAll();
        $this->view("index",array("all_alumnos"=>$all_alumnos));

    }

    public function test() {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://reqres.in/api/users?page=2');
        var_dump($res);

        $this->view("test",array());
    }

}
?>
