<?php
class UserController {
   private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}
?>