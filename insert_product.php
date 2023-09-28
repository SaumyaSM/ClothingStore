<?php
include('connect.php');
if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $Product_Keywords = $_POST['Product_Keywords'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    // Accessing images
    $Product_image1 = $_FILES['Product_image1']['name'];
    $Product_image2 = $_FILES['Product_image2']['name'];
    $Product_image3 = $_FILES['Product_image3']['name'];

    // Accessing image tmp name
    $temp_image1 = $_FILES['Product_image1']['tmp_name'];
    $temp_image2 = $_FILES['Product_image2']['tmp_name'];
    $temp_image3 = $_FILES['Product_image3']['tmp_name'];

    // Checking empty condition
    if ($product_title == '' || $product_description == '' || $Product_Keywords == '' || $product_category == '' ||
        $product_price == '' || $Product_image1 == '' || $Product_image2 == '' || $Product_image3 == '') {
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();
    } else {
        // Move uploaded images to destination folder
        move_uploaded_file($temp_image1, "./product_images/$Product_image1");
        move_uploaded_file($temp_image2, "./product_images/$Product_image2");
        move_uploaded_file($temp_image3, "./product_images/$Product_image3");

        // Insert query
        $insert_products = "INSERT INTO `products` (product_title, product_description, product_keywords,
        category_id, product_image1, product_image2, product_image3, product_price, date, status) 
        VALUES ('$product_title', '$product_description', '$Product_Keywords', '$product_category',
        '$Product_image1', '$Product_image2', '$Product_image3', '$product_price', NOW(), '$product_status')";

        $result_query = mysqli_query($con, $insert_products);
        if ($result_query) {
            echo "<script>alert('Successfully inserted the products')</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_tittle" class="form-control" 
                placeholder="Enter product title" autocomplete="off"
                required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" 
                placeholder="Enter product description" autocomplete="off"
                required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Keywords" class="form-label">Product Keywords</label>
                <input type="text" name="Product_Keywords" id="Product_Keywords" class="form-control" 
                placeholder="Enter Product Keywords" autocomplete="off"
                required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <?php
                    $select_query = "SELECT * FROM `categories`"; 
                    $result_query = mysqli_query($con, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $category_title = $row['category_title'];
                        $category_id = $row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>"; 
                    }
                    ?>

                    <!--<option value="">Category1</option>
                    <option value="">Category2</option>
                    <option value="">Category3</option>
                    <option value="">Category4</option>-->
                </select>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="Product_image1" id="Product_image1" class="form-control" 
                required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_image2" class="form-label">Product Image 2</label>
                <input type="file" name="Product_image2" id="Product_image2" class="form-control" 
                required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_image3" class="form-label">Product Image 3</label>
                <input type="file" name="Product_image3" id="Product_image3" class="form-control" 
                required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" 
                placeholder="Enter product price" autocomplete="off"
                required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit"name="insert_product" 
                class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>
        </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>   
</body>
</html>