<?php
class Home extends Controller 
{
    public $menu;
    public $banner;
    public $category;
    public $product;
    public function __construct(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        $this->banner = $this->model('Banner');
        $this->menu = $this->model('menu');
        $this->category = $this->model('category');
        $this->product = $this->model('product');
    }
    public function index(){     
        $output = $this->menu->megamenu();
        echo json_encode($output);
    }   
    public function ShowBanner(){
        $getbanner = $this->banner->getBanner();
        echo json_encode($getbanner);
    }
    public function getCategories(){
        $getCategory = $this->category->getCategory(0);
        echo json_encode($getCategory);
    }
    public function getProducted(){
        $getCategory = $this->category->getCategory(0);
        $result = [];
        foreach($getCategory as $row){
            $id = $row['id'];
            $getProduct = $this->product->getProduct($id,4,0);
            array_push($result,$getProduct);
        }
        echo json_encode($result);
    }
    public function getMenu(){
        $output = $this->product->getProduct(0,6);
        echo json_encode($output);
    }
}
