<?php 
class DB{
    protected $server = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbName = "nodejs";
    public $conn;
   public function __construct()
   {
       try{
           $this->conn = new PDO("mysql:host=$this->server;dbname=$this->dbName",$this->username,$this->password);
           $this->conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       }
       catch(PDOException $e){
           echo "Error: ". $e->getMessage();
       }
       return $this->conn;
   }
   public function QueryAll($sql){
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
  public function queryOne($sql){
    $stmt = $this->conn->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt = null;
    return $result;
}
}