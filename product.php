<?php
include_once 'database.php';
class Product extends Database {
  protected function getproduct(){
    $sql = "SELECT * FROM test";
    $result = $connection->connect()->query($sql);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $data[] = $row;
      }
      return $data;
    }
  }
}
$res = new Product;
$res->getproduct();
