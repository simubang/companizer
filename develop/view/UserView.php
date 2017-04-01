<?php
class UserView {
   private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
	
    public function output(){
    	$database= new Database();
        return $database->query("select * from comp_user");
    }
}
?>