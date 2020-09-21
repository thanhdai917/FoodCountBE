<?php
class ProductController extends Controller 
{
    public $menu;
    public $banner;
    public $category;
    public $product;
    public $tag;
    public function __construct(){
        $this->banner = $this->model('Banner');
        $this->menu = $this->model('menu');
        $this->category = $this->model('category');
        $this->product = $this->model('product');
        $this->tag = $this->model('tag');
    }
    public function index(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        $output = $this->product->getProduct(0,0);
        echo json_encode($output);
    }
    public function getProductLimit(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers:Origin, X-Requested-With, content-type');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        $received_data = json_decode(file_get_contents("php://input"));
        if($received_data){
            $sort = "";
            if($received_data->sort == ""){
                $sort = "";
            }else{
                $sort = $received_data->sort;
            }
            $limit = $received_data->limit;
            $page = $received_data->page;
            $star = ($page-1)*$limit;
            $query = $received_data->query;
            $output = $this->product->getPRoductLimit($limit,$star,$sort,$query);
            echo json_encode($output);
        }
    }
    public function getProductHot(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        $output = $this->product->getProductTop();
        echo json_encode($output);
    }
    public function getProductDetail($slug){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        if($slug!=""){
            $slug = $_GET['param'];
            $output = $this->product->getProductDetails($slug);
            $result = [];
            $tag = $this->product->getTag($output['id']);
            $cate = $this->category->getCategories($output['cate_id']);
            $tagArray = [];
            foreach($tag as $row){
                $product_id = $row['product_id'];
                $arrayId = explode(',',$product_id);
                $productOfTag = $this->product->getProductOfTag($arrayId,$output['id']);
                $productTag = [];
                foreach($productOfTag as $i=>$rows){
                   array_push($productTag,$rows);
                //    array_unique($productTag, 0);
                }
                array_push($tagArray,new TagOfProduct($row['id'],$row['name'],$row['slug'],$productTag));
            }
            array_push($result,new ProductTagOfCate($output['id'],$output['name'],$output['price'],$output['quantity'],$output['slug'],$output['image'],$output['description'],$cate,$tagArray));
            // $result = array_unique($result, 0);
            echo json_encode($result);
        }
    }
    public function getTagProduct(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        $result = [];
        $output = $this->product->getTagProductHot();
        echo  json_encode($output);
    }
    public function getAllProductOfTag($param){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers:Origin, X-Requested-With, content-type');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        if(isset($param)){
            $received_data = json_decode(file_get_contents("php://input"));
            $query = "";
            if($received_data){
            if($received_data->query == ""){
                $query = "";
            }else{
                $query = $received_data->query;
            }
            }   
            $output = $this->tag->GetAllProduct($param,$query);
            echo json_encode($output);
        }
    }
}
