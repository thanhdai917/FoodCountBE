<?php
class category extends DB
{
    public function getCategory($id)
    {
        if ($id == 0) {
            $query = "SELECT * FROM catogery";
            $result = $this->QueryAll($query);
            return $result;
        } else {
            $selectAllCate = "SELECT * FROM catogery";
            $resultselectAllCate = $this->QueryAll($selectAllCate);
            $result = [];
            foreach ($resultselectAllCate as $row) {
                $menu = $row['menu_id'];
                $penta = explode(',', $menu);
                $cate = $this->getArray($penta,$id,$row['id']);
                array_push($result,$cate);
            }
            return $result;
        }
    }
    // return $product;     }
    public function getProduct($id, $limit)
    {
        if ($limit == 0 && $id == 0) {
            $query = "SELECT * FROM product";
        } else if ($limit == 0) {
            $query = "SELECT * FROM product where cate_id in ($id)";
        } else if ($id == 0) {
            $query = "SELECT * FROM product  limit $limit";
        } else {
            $query = "SELECT * FROM product where cate_id = $id limit $limit";
        }
        $result = $this->QueryAll($query);
        return $result;
    }
    public function getArray($array=[],$id,$cateid){
        for($i = 0; $i<=count($array)-1; $i++){
            if($array[$i] === $id){
                $cate = [];
                $query = "SELECT * FROM catogery where id = $cateid";
                $result = $this->queryOne($query);
                $cate[] = $result;
                return $cate;
            }
        }
    }
    public function getCategories($id){
        $query = "SELECT * FROM catogery where id = $id";
        $result = $this->queryOne($query);
        return $result;
    }
}
