<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Glow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f0e01b6c2e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <style>
        .logo {
            width: auto;
            height: 70px;
        }

        #page-header{
            background-image: url(IMG/lbanner.png);
            height: 80vh;
            background-size: cover;
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            padding: 14px;
        }
        
        #page-header h1{
            color: #fff; 
        }

        .card{
            width: 23%;
            min-width: 250px;
            padding: 10px 12px;
            border: 1px solid #d5dde6;
            border-radius: 20px;
            cursor: pointer;
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
            margin: 15px;
            transition: 0.2 ease;
            position: relative;
        }
        .card:hover{
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
        }
        .card-img-top{
            width: 100%;
            border-radius: 20px;
        }
    </style>

</head>

<body>

    <section id="header">
        <a href="#"><img src="IMG/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a class="actve" href="ladies.html">Ladies</a></li>
                <li><a href="mens.html">Mens</a></li>
                <li><a href="kids.html">Kids</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact_us.html">Contact us</a></li>
                <li><a href="about_us.html">About us</a></li>
                <li><a href="log_in.html">Log In</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-x"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

<section id="page-header">
    <h1>Ladies Clothes</h1>
</section>

    <section id="product1" class="section-p1">
        <h2 class="text-center">Dresses</h2>
        <div class="container">
            <div class="row">
    
              <?php 
    
                $conn = mysqli_connect("localhost", "root", "", "clothingstore");
    
                if(!$conn){
                    die("Connection Error!");
                }
    
                $sql = "select * from products where category_id=1";
    
                $result = $conn->query($sql);
    
                if($result->num_rows > 0){
            
                  while($row = $result->fetch_assoc()){ ?>
    
                    <?php $img =  $row["product_image1"] ?>
    
                    <div class="col-sm-4 mb-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="./IMG/<?php echo $img ?>" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title"> <?php echo $row["product_title"] ?> </h5>
                              <p class="card-text"> <?php echo $row["product_description"] ?> </p>
                              <h4> <?php echo $row["product_price"] ?> </h4>
                              <a href="cart.php?product_id=<?php echo $row["product_id"] ?>&product_title=<?php echo $row["product_title"] ?>&product_price=<?php echo $row["product_price"] ?>&type=add" class="btn btn-primary">Add to cart</a>
                              <a href="#" class="btn btn-secondary">View More</a>
                          </div>
                      </div>
                    </div>
    
                  <?php }
          
                }
                else{
                    echo "No Data";
                }
    
              ?>        
    
            </div>
        </div>
    </section>
    
    <section id="product1" class="section-p1">
        <h2 class="text-center">Tops</h2>
        <div class="container">
            <div class="row">
    
              <?php 
    
                $conn = mysqli_connect("localhost", "root", "", "clothingstore");
    
                if(!$conn){
                    die("Connection Error!");
                }
    
                $sql = "select * from products where category_id=2";
    
                $result = $conn->query($sql);
    
                if($result->num_rows > 0){
            
                  while($row = $result->fetch_assoc()){ ?>
    
                    <?php $img =  $row["product_image1"] ?>
    
                    <div class="col-sm-4 mb-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="./IMG/<?php echo $img ?>" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title"> <?php echo $row["product_title"] ?> </h5>
                              <p class="card-text"> <?php echo $row["product_description"] ?> </p>
                              <h4> <?php echo $row["product_price"] ?> </h4>
                              <a href="cart.php?product_id=<?php echo $row["product_id"] ?>&product_title=<?php echo $row["product_title"] ?>&product_price=<?php echo $row["product_price"] ?>&type=add" class="btn btn-primary">Add to cart</a>
                              <a href="#" class="btn btn-secondary">View More</a>
                          </div>
                      </div>
                    </div>
    
                  <?php }
          
                }
                else{
                    echo "No Data";
                }
    
              ?>        
    
            </div>
        </div>
    </section>
    
    <section id="product1" class="section-p1">
        <h2 class="text-center">Denims</h2>
        <div class="container">
            <div class="row">
    
              <?php 
    
                $conn = mysqli_connect("localhost", "root", "", "clothingstore");
    
                if(!$conn){
                    die("Connection Error!");
                }
    
                $sql = "select * from products where category_id=3";
    
                $result = $conn->query($sql);
    
                if($result->num_rows > 0){
            
                  while($row = $result->fetch_assoc()){ ?>
    
                    <?php $img =  $row["product_image1"] ?>
    
                    <div class="col-sm-4 mb-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="./IMG/<?php echo $img ?>" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title"> <?php echo $row["product_title"] ?> </h5>
                              <p class="card-text"> <?php echo $row["product_description"] ?> </p>
                              <h4> <?php echo $row["product_price"] ?> </h4>
                              <a href="cart.php?product_id=<?php echo $row["product_id"] ?>&product_title=<?php echo $row["product_title"] ?>&product_price=<?php echo $row["product_price"] ?>&type=add" class="btn btn-primary">Add to cart</a>
                              <a href="#" class="btn btn-secondary">View More</a>
                          </div>
                      </div>
                    </div>
    
                  <?php }
          
                }
                else{
                    echo "No Data";
                }
    
              ?>        
    
            </div>
        </div>
    </section>


    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="IMG/logo.png" alt="logo" width="50px" height="50px">
            <h4>Contact</h4>
            <p><strong>Address :</strong> One Galle Face Mall 1A Central Road,
                Colombo 00200</p>
            <p><strong>Hours :</strong> 08:00 To 19:00 - Mon to Sat </p>
            <p><strong>Contact :</strong> +94 71459 2141</p>
            <div class="Follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Informations</a>
            <a href="#">Privecy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store Or Google Play</p>
            <div class="row">
                <img src="IMG/apps122.png" alt="app" height="30px" width="200px">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="IMG/payment11.png" alt="pay" height="100px" width="200">
        </div>
        
        <div class="copyright">
            <p>@ 2023, NSBM Undergraduates, 22.2, 1st Year</p>
        </div>
    
    </footer>

    <script src="script.js"></script>

</body>
</html>