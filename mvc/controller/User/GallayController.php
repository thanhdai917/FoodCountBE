<?php
class GallayController extends Controller 
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
        $getCategory = $this->category->getCategory(0);
        $result = [];
        foreach($getCategory as $row){
            $id = $row['id'];
            $getProduct = $this->product->getProduct($id,0);
            array_push($result,$getProduct);
        }
        echo json_encode($result);
    }
}
