<?php
class Ajax extends Controller{
    public $country;
    public $checkUser;
   public function __construct(){
       $this->country=$this->model("hotelModel");
       $this->checkUser =$this->model("userRegis");
       $this->hotelDetail =$this->model("hotelDetail");

    }
    public function checkUsername(){
        if(!empty($_POST['username'])){
            $user = $_POST['username'];
            $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
            $user = str_replace($reservedSymbols, '', $user);    
            if($user!=""){
            echo $this->checkUser->checkUserName($user);
        }else{
            return false;
        }
        }
    }
}