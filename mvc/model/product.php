<?php
class product extends DB{
    public function getProduct($id,$limit){
        if($limit==0 && $id == 0){
            $query = "SELECT * FROM product";
        }else if($limit==0){
            $query = "SELECT * FROM product where cate_id in ($id)";
        }else if($id == 0){
            $query = "SELECT * FROM product  limit $limit";
        }else{
            $query = "SELECT * FROM product where cate_id = $id limit $limit";
        }
        $result = $this->QueryAll($query);
        return $result;
    }
    public function getPRoductLimit($limit,$start,$sort,$search){
        if($sort == "" && $search == ""){
            $query = "SELECT * FROM product LIMIT $start,$limit";
        }else if($search == ""){
            $query = "SELECT * FROM product ORDER BY price $sort LIMIT $start,$limit";
        }else if($sort == ""){
            $query = "SELECT * FROM product Where name like '%".$search."%' LIMIT $start,$limit";
        }else{
            $query = "SELECT * FROM product Where name like '%".$search."%' ORDER BY price $sort LIMIT $start,$limit";
        }

        $result = $this->QueryAll($query);
        return $result;
    }
    public function getProductTop(){
        $query = "SELECT * FROM `product` ORDER BY views DESC limit 6";
        $result = $this->QueryAll($query);
        return $result;
    }
    public function getProductDetails($slug){
        $query = "SELECT * FROM product where slug = '".$slug."'";
        $result = $this->queryOne($query);
        return $result;
    }
    public function getTagProductHot(){
        $query = "SELECT * FROM tag WHERE product_id IS NOT NULL";
        $result = $this->QueryAll($query);
        return $result;
    }
    public function getTag($id){
        $query = "select * from tag";
        $result = $this->QueryAll($query);
        $output = [];
        foreach($result as $row){
            $product_id = explode(',',$row['product_id']);
            $tag = $this->getArrayTag($product_id,$id,$row['id']);
            if($tag !== null){
                array_push($output,$tag);
            };
        }
        return $output;
    }
    public function getArrayTag($product_id=[],$id,$tagID){
        for($i = 0; $i<=count($product_id)-1;$i++){
            if($product_id[$i] === $id){
                $getTag = "SELECT * FROM tag where id = $tagID";
                $resultTag = $this->queryOne($getTag);
                return $resultTag;
            }
        }
    }
    public function getProductOfTag($arrayId=[],$id){
        $arr = [];
        for ($i=0; $i <= count($arrayId)-1 ; $i++) { 
            $query = "SELECT * From product where id = ".$arrayId[$i]."";
            $result = $this->queryOne($query);
            if($result['id'] != $id){
                array_push($arr,$result);
            }
        }
        // $arr = array_unique($arr, 0);
        // // print_r($arr);
        return $arr;
    }
}
