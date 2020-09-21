<?php
class menu extends DB{
    public function megamenu(){
        $query = "SELECT * FROM menu";
        $result = $this->QueryAll($query);
        $output = helpers::megaMenu($result,0);
        return $output;
    }
    public function getslugMenu($string){
        $query = "select * from menu where slug = '".$string."'";
        $result = $this->queryOne($query);
        return $result;
    }
}