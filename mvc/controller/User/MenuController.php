<?php
class MenuController extends Controller 
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
    public function index($string){
        $string = $_GET['param'];
        if($string==""){     
        $category = $this->category->getCategory(0);
        $categories = [];
        foreach($category as $row){
        $result = [];
        $productofCate = [];
        $product = $this->product->getProduct($row['id'],0);
        foreach($product as $products){
            array_push($productofCate,new ProductContent($products['id'],$products['name'],$products['price'],$products['quantity'],$products['slug'],$products['image'],$products['description']));
        }
        array_push($result, new ProductOfCate($row['id'],$row['title'],$row['sub_title'],$row['path'],$productofCate));
        array_push($categories,$result);
        }
        echo json_encode($categories);
        }else{
        $menu = $this->menu->getslugMenu($string);
        // echo $menu['id'];
        $output = $this->category->getCategory($menu['id']);
        $categories = [];
        foreach($output as $category){
        if($category!=null){
        $result = [];
        foreach($category as $row){
        $productofCate = [];
        $product = $this->product->getProduct($row['id'],0);
        foreach($product as $products){
            array_push($productofCate,new ProductContent($products['id'],$products['name'],$products['price'],$products['quantity'],$products['slug'],$products['image'],$products['description']));
        }
        array_push($result, new ProductOfCate($row['id'],$row['title'],$row['sub_title'],$row['path'],$productofCate));
        }
        // echo $a = json_decode($result,true);
        array_push($categories,$result);
        }   
        }
        echo json_encode($categories);
        }
    }   
}