<?php
class HomeController extends ControladorBase{
     
    public function __construct() {
        parent::__construct();
    }
     
    public function index(){
    
        $this->view("home", array());
    }

}
?>


