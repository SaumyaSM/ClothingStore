<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<div class="container-fluid p-0">
    <nav class="navbar bg-body-tertiary">
         <div class="container-fluid" >
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="navbar-brand" href="#">Welcome Guest!</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="bg-light">
        <h3 class="text-center p-2">Managing Details</h3>
    </div>
    <div class="row">
    <div class="col-md-12" style="background-color: #ADD8E6; padding: 1rem;">    
        <div class="button text-center">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <button><a href="insert_product.php" class="nav-link text-light 
            bg-info my-1">Insert Products</a></button>
            <button><a href="" class="nav-link text-light 
            bg-info my-1">View Products</a></button>
            <button><a href="index.php?insert_Category" class="nav-link text-light 
            bg-info my-1">Insert Categories</a></button>
            <button><a href="" class="nav-link text-light 
            bg-info my-1">All Orders</a></button>
            <button><a href="" class="nav-link text-light 
            bg-info my-1">Logout</a></button>
        </div>
       </div> 
    </div>
    <div class="container my-3">
        <?php
        if (isset($_GET['insert_Category'])) {
            include('Insert_Categories.php');
        } 
        ?>
    </div>
</div>
</body>
</html> 