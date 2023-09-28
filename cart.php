<?php
 
 include('connect.php');

 if(isset($_REQUEST["type"])){

  if($_REQUEST["type"] == "add"){
    $id = $_REQUEST["product_id"];
    $title = $_REQUEST["product_title"];
    $price = $_REQUEST["product_price"];

    $sql = "insert into cart values('".$id."','".$title."','".$price."')";
    
    $con->query($sql);
  }
  else{
    $id = $_REQUEST["product_id"];

    $sql = "delete from cart where product_id = '".$id."'";
    
    $con->query($sql);
  }


  
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing store</title>
    <!---bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!---font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="kids.css">
</head>
<body>
    <!---bootstarp js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     <!---navbar-->
     <nav class="navbar navbar-expand-lg navbar" style="background-color: #6F8FAF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Ladies</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Mens</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Kids</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About Us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <a href="cart.php" class="btn btn-outline-success"><i class="fa-solid fa-cart-shopping"></i></a>
      </form>
    </div>
  </div>
</nav>
<div class="bg-light">
    <h3 class="text-center">My Cart</h3>
</div>

<div class="container">
    <div class="row">
        <table class="tabel table-bordered text-center">
            <thread>
                <tr>
                    <th>Product ID</th>
                    <th>Product Title</th>
                    <th>Price</th>
                    <th>Remove</th>
                 </tr>
             </thread>  
             <tbody>

             <?php 

             $total =0;

            $conn = mysqli_connect("localhost", "root", "", "clothingstore");

            if(!$conn){
                die("Connection Error!");
            }

            $sql = "select * from cart";

            $result = $conn->query($sql);

            if($result->num_rows > 0){
        
              while($row = $result->fetch_assoc()){ 
                
                $p = str_replace("$", "", $row["product_price"]);
                $intprice = (int)$p;
                $total = $total + $intprice;
                
                ?>

                <tr>
                  <td><?php echo $row["product_id"] ?></td>
                  <td><?php echo $row["product_title"] ?></td>
                  <td><?php echo $row["product_price"] ?></td>
                  <td> <a href="cart.php?product_id=<?php echo $row["product_id"] ?>&type=remove" class="btn btn-warning">Remove</a> </td>
                </tr>


              <?php }
      
            }
            else{
                echo "No Data";
            }

          ?>  
                
                

             </tbody>
             </table>
            <div class="d-flex mb-5">
            <h4 class="px-3">Subtotal: <strong class="text=info">$<?php echo $total ?></strong></h4>
            <a href="ladies.php"><button class="bg-info px-3  border-0 m-2 mx-3">Continue shopping</button></a>
            <a href=""><button class="bg-secondary px-3  m-2 border-0">Checkout</button></a>
            </div>

                  

</div>
</div>
</body>
</html>
