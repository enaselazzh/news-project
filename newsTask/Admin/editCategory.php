<?php
include 'config.php';
include 'templet/header.php';
$id = $_GET['idCate'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nameCategory = $_POST['namecate'];
     if(empty($nameCategory)){
       echo "enter name category ";
       header('location:editCategory.php');
     }else{
        updateCate('category','cate_id=?',$id,$nameCategory);
        header('location:category.php');
     }
     
  }
  

foreach(fetchDatacon('category','cate_id =?',$id) as $val){
?>
<div class="container">
<form action="<?php $_SERVER['PHP_SELF']?>" method='POST'>
    <h2>Edit Category</h2>
  <div class="form-group">
      <input type="hidden" name="id" value=<?php echo $val['cate_id'];?>>
    <label for="namecate">Name Category</label>
    <input type="text" class="form-control" id="namecate" name="namecate" value =<?php echo $val['name_category'];?> />
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
}
include 'templet/footer.php';

?>