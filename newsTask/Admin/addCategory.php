<?php
include 'config.php';
include 'templet/header.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $nameCategory = $_POST['namecate'];
   if(empty($nameCategory)){
     echo "enter name category ";
     header('location:addCategory.php');
   }else{
     insert('category',$nameCategory);
   }
   header('location:category.php');
}

?>
<div class="container">
<form action="<?php $_SERVER['PHP_SELF']?>" method='POST'>
    <h2>Add Category</h2>
  <div class="form-group">
    <label for="namecate">Name Category</label>
    <input type="text" class="form-control" id="namecate" name="namecate"aria-describedby="emailHelp">
  </div>
 
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>
</div>
<?php
include 'templet/footer.php';

?>