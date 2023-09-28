<?php
include('connect.php');
if(isset($_POST['insert_cat'])){
  $category_title = $_POST['cat_title'];
  $select_query = "Select * from `categories` where category_title='$category_title'";
  $result_select = mysqli_query($con, $select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('This category is already present inside the database')</script>";
  }else{
  $insert_query = "insert into `categories` (category_title) VALUES ('$category_title')";
  $result = mysqli_query($con, $insert_query);
  if($result){
    echo "<script>alert('Category has been inserted successfully')</script>";
  }
}
}
?>
<h2 class="text-center">Insert Categories</h2>



<div class="container"> <!-- Wrap the form in a container for centering -->
  <div class="row justify-content-center"> <!-- Center the form horizontally -->
    <form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-3">
      <span class="input-group-text bg-info" id="basic-addon1">
        <i class="fas fa-receipt"></i>
      </span>
      <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
    </div>
      <div class="input-group w-10 mb-2">
        <input type="submit" class="bg-info border-0 p-2 my-2" name="insert_cat"value="Insert Categories">
      </div>
    </form>
  </div>
</div>
