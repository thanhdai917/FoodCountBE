<?php
class ProductOfCate{
    public $id;
    public $title;
    public $sub_title;
    public $path;
    public $child_menu;
    public function __construct($id,$title,$sub_title,$path,$child_menu){
      $this->id = $id;
      $this->title = $title;
      $this->sub_title = $sub_title;
      $this->path = $path;
      $this->child_menu = $child_menu;
    }
  }
  class ProductContent {
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $slug;
    public $images;
    public $description;
    public function __construct($id,$name,$price,$quantity,$slug,$images,$description){
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->quantity = $quantity;
      $this->slug = $slug;
      $this->images = $images;
      $this->description = $description;
    }
  }
  class ProductTagOfCate{
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $slug;
    public $images;
    public $description;
    public $tag;
    public $cate;
    public function __construct($id,$name,$price,$quantity,$slug,$images,$description,$cate,$tag){
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->quantity = $quantity;
      $this->slug = $slug;
      $this->images = $images;
      $this->description = $description;
      $this->cate = $cate;
      $this->tag = $tag;
    }
  }
  class TagOfProduct{
      public $id;
      public $name;
      public $slug;
      public $product;
      public function __construct($id,$name,$slug,$product){
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->product = $product;
      }
  }