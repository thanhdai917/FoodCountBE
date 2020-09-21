<?php
class Logout extends Controller{
    public function index(){
        unset($_SESSION["admin"]);
        setcookie("rememberme_admin","");
        echo "<script>alert('Success Logout!')</script>";
        echo "<script>window.onload =
        location.href = './admin/Login';</script>";    
    }
}