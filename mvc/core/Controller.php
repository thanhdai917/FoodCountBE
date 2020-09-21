<?php
class Controller{

    public function model($model){
        require_once "./mvc/model/".$model.".php";
        return new $model;
    }

    public function view($folder,$view, $data=[]){
        if($folder==""){
            require_once "./mvc/views/".$view.".php";
        }
        require_once "./mvc/views/".$folder."/".$view.".php";
    }
}
?>