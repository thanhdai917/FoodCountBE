<?php
class Home extends Controller 
{
    public function __construct(){
        if(isset($_SESSION['admin'])){
           
        }else{
            echo "<script>window.onload =
            location.href = './Login';</script>";
        }
    }
    public function index(){
        $page = 'dashboard';
        $view = $this->view('Admin',"master_view", [
            'title' => "Dashboard",
            'page' => $page
        ]);
    }
}
