<?php
include_once 'database.php';


  


class Showproduct extends Database{
  public function show(){
    $query = "SELECT * FROM products";
    $result = $this->connect()->query($query);
    global $numrows;
    $numrows = $result->num_rows;

    if($numrows>0){
      global $r;
      for($i=0;$i<$numrows; $i++){
        $row = $result->fetch_assoc();
        $r []=$row;
      }
    }
    

    if(isset($_POST["del"])){
    $data = array($_POST["del"]);
    
      
    
    foreach($data as $id)
    {
      
      $query = "DELETE FROM products WHERE SKU = '".$id."'";
     
      $this->connect()->query($query);
      header('Location: showproduct.php');
      exit();
    }
    }
}
}
$db = new Showproduct;
$db->show();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>

  <body>
      <style media="screen">
      .product{
        background-color: #1abc9c;
        display:flex;
        flex-direction:row;
        justify-content:space-between;
      }
      .product > button{
        background-color: #16a085;
        border-style: none;
        width: 150px;
        height: 50px;
        color: white;
        margin:15px;
      }
      .product >button:hover{
        background-color: #2ecc71;
      }
      .product > h1{
        margin:20px;
        color: white;

      }
      .box{
        
        border:solid 1px #2ecc71;
      }
      .post{
        display: flex;
        flex-direction: ;
        justify-content: space-between;
        margin:30px;
        flex-wrap: wrap;
        align-items: center;
        
      }
      .box{
        
        display: flex;
        flex-direction: column;
        margin:15px;
        background-color: #1abc9c;
        width:30%;
      }
      .box > h4{
        height: 5px;
        text-align: center;
        color: white;
      }
      h2{
        color:white;
        
      }
      </style>
      <form action="showproduct.php" method="post">
      <div class="product">
        <h1>Products</h1>
        <form action="/addproduct.php"> <button type="submit"><h3>Add Product Page</h3></button></form>
        <h2>Mass Delete Action</h2>
        <button id="delete" class="button" type="submit" name="button">Apply</button>


      </div>

      <div class="post">
      <?php for($i=0;$i<$numrows; $i++) {?>
          <div  id="<?php echo $r[$i]['SKU'] ?>" class="box">
          <input type="checkbox" value="<?php echo $r[$i]['SKU'] ?>" name="del">
            <h4><?php echo $r[$i]['SKU'] ?></h4>
            <h4><?php echo $r[$i]['name'] ?></h4>
            <h4><?php echo $r[$i]['price'] ?></h4>
            <h4><?php echo $r[$i]['type'] ?></h4>
            <h4><?php echo $r[$i]['attribute'] ?></h4>

        </div>
      <?php }?>
        
        
        
        

      </div>

      
    </form>
      <script>


      </script>

  </body>
</html>
