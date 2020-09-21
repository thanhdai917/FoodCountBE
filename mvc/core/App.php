<?php
class App{
    protected $controller="Home";
    protected $action="index";
    protected $folder = "User";
    protected $params;

    function __construct(){
        //CONTROLLER
        //check if have controller
        if(isset($_GET['folder'])){
            if($_GET['folder']=="User"){
                if(isset($_GET['ctrl'])){
                    if (file_exists('mvc/controller/'.$_GET['folder'].'/' . $_GET['ctrl'] . '.php')) {
                        $this->controller = $_GET['ctrl'];
                        $this->folder = $_GET['folder'];
                    }
                }
            }
        }
        require_once 'mvc/controller/'. $this->folder .'/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //ACTION
        //check if it have action inside controller
        if(isset($_GET['action']))
        if (method_exists($this->controller, $_GET['action'])) {
            $this->action = $_GET['action'];
        }

        //PARAM
        $this->params = $this->paramProcess();
        //
        call_user_func_array([$this->controller, $this->action], $this->params);
    }
    public function paramProcess()
    {
        if (isset($_GET['param'])) {
            return explode("/", filter_var(trim($_GET['param'])));
        }
        return [];
    }
    }
    
?>