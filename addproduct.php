<?php


include_once 'database.php';

  if (isset($_POST["button"])) {
    $SKU = trim($_POST['sku']);
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $type = trim($_POST['carlist']);
    if($type === 'Furniture'){
      $attribute = trim($_POST['attribute1']) . 'x' .trim($_POST['attribute2']) . 'x' . trim($_POST['attribute3']);
    }else{
      $attribute = trim($_POST['attribute']);
    }
  class Addproduct extends Database {
    public function add($SKU, $name, $price,$type, $attribute){
      $insert = "INSERT INTO products (SKU, name, price, type, attribute) VALUES ('$SKU', '$name', '$price$', '$type', '$attribute')";
      $this->connect()->query($insert);
    }
  }
  $user = new Addproduct;
  $user->add($SKU,$name,$price, $type, $attribute);

}
?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body >
      <style media="screen">
      body{
        padding-left:30px;
        padding-right:30px;
      }
      form{
        display:flex;
        flex-direction:column;
      }
      form > div.header{
        background-color: #1abc9c;
        display:flex;
        flex-direction:row;
        justify-content:space-between;

      }


      form > div.header > h1{
        margin:20px;
        color: white;

      }
      form > div.header > button{
        background-color: #16a085;
        border-style: none;
        width: 150px;
        height: 50px;
        color: white;
        margin:15px;
      }
      form > div.header >button:hover{
        background-color: #2ecc71
      }
      form > hr{

        background-color:red;
      }
      input{
        border-radius: 5px;
        border:solid 1px #16a085;
        width: 30%;
        height: 30px;
        margin:15px;
      }
      select{
        border-radius: 5px;
        border:solid 1px #16a085;
        width: 30%;
        height: 30px;
        margin: 15px;
      }
      .attribute{
        border:solid 1px black;
        width: 30%;
        margin:15px;
      }
      .attribute > input {
        width: 50%;
      }
      </style>





      <form class="" action="addproduct.php" method="post">
        <div class="header">
          <h1>Add Product</h1>

          <button type="submit" name="button">Save</button>


        </div>
        <hr>
        <div class="">

        </div>

        <input placeholder="SKU" type="text" name="sku" value="">



        <input placeholder="Name" type="text" name="name" value="">



        <input placeholder="Price" type="text" name="price" value="">


        <select id="list" name="carlist">
            <option value="DVD-disc">DVD-disc</option>
            <option value="Book">Book</option>
            <option value="Furniture">Furniture</option>
        </select>

        <div id="attribute" class="attribute">
          
        </div>
      </form>
      <form action="./showproduct.php" method="get"> <button type="submit"><h3>Products Page</h3></button></form>

      <script type="text/javascript" src="app.js">

      </script>
  </body>
</html>
