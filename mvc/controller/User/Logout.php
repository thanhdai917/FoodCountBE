<?php
class Logout extends Controller{
    public function index(){
        unset($_SESSION["user"]);
        setcookie("remembermeUser","");
        echo "<script>alert('Success Logout!')</script>";
        echo "<script>window.onload =
        location.href = './admin/Login';</script>";    
    }
}