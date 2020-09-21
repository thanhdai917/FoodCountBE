<?php
class tag extends DB{
   public function GetAllProduct($param,$search){
       $query = "SELECT * FROM tag where slug='".$param."' AND product_id is not null";
       $result = $this->queryOne($query);
       $product = explode(',',$result['product_id']);
       $output = $this->getArray($product,$search);
       return $output;
   }
   public function getArray($array = [],$search){
        $arr = [];
       for ($i=0; $i < count($array) ; $i++) { 
           if($search == ""){
            $query = "SELECT * FROM product where id = ".$array[$i]."";
           }else{
            $query = "SELECT * FROM product where id = ".$array[$i]." AND name like '%".$search."%'";
           }
            $result = $this->queryOne($query);
            if($result){
                array_push($arr,$result);
            }
       }
       return $arr;
   }
}
