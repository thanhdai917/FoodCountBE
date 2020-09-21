<?php
class Login extends Controller 
{
    public $admin;
    public function __construct(){
        $this->admin = $this->model('admin');
    }
    public function index(){
        if(isset($_SESSION['admin'])){
            echo "<script>window.onload =
            location.href = './Home';</script>";
        }elseif(isset($_COOKIE['rememberme_admin'])){
            $value = helpers::decryptCookie($_COOKIE['rememberme_admin']);
            $result = $this->admin->loginIsCokie($value);
            if($result){
                echo "<script>alert('Đăng nhập thành công')</script>";
                $_SESSION['admin']=$value;
                echo "<script>window.onload =
    location.href = './Home';</script>";
            }
        }else{
            $this->view('','login');
        }
    }
    public function login(){
        $result = "";
            // Tạo list Post cần check
            $listPost = ['email','password'];
            // Kiểm tra khi nhấn nút submit
            if(isset($_POST['login'])){
                // Gọi class 'helpers' function 'checkPostExist' kiểm ra POST truyền vào
                if(helpers::checkPostExist($listPost)){
                    // Gọi hàm xóa ký tự đặc biệt
                    $email = $_POST['email'];
                    $password = helpers::replaceSpecialCharacter($_POST['password']);
                    $result = $this->admin->login($email,$password);
                    if(!empty($_POST["rememberme"])) {
                        $value = helpers::encryptCookie($email);
                        setcookie ("rememberme_admin",$value,time()+ 3600);
                        // echo "Cookies Set Successfuly";
                    } 
                    else {
                        setcookie("rememberme_admin","");
                        // echo "Cookies Not Set";
                    }
                    
                    if($result){
                        echo "<script>alert('Đăng nhập thành công')</script>";
                        $_SESSION['admin']=$email;
                        echo "<script>window.onload =
            location.href = './admin/Home';</script>";
                    }else{
                        echo "<script>alert('Sai tài khoản hoặc mật khẩu')</script>";
                        echo "<script>window.onload =
            location.href = './Login';</script>";
                    }
                }             
            }
            $this->view('login',[
                'login'=>$result
              ]);
    }
}
