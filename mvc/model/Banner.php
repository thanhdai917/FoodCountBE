<?php
class Banner extends DB{
    public function getBanner(){
        $query = "SELECT * FROM banner";
        $result = $this->QueryAll($query);
        return $result;
    }
}