<?php
include 'templet/header.php';
include 'templet/navbar.php';
include 'config.php';
?>
<div class="container">
    <h1 class="text-center">Category</h1>
    <div class="addcate">
    <a href="addCategory.php" class="btn btn-primary add"> <i class="fas fa-plus-circle"></i> Add Category</a>
    </div>
    <div class="row">
<?php 
 foreach(fetchData('category') as $val){
 echo '
  <div class="col-sm-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">'.$val['name_category'].'</h5>
        <p class="card-text">'?>
       <?php foreach(countData('artical','art_id','category_id =?',$val['cate_id'] ) as $count)
        {
         
           echo $count[0];
        }
      ?>
        <?php echo'<a href="sectionArt.php?idArt='. $val['cate_id'].'"><i class="fas fa-newspaper"></i> Articles</a></p>
        <a  href="editCategory.php?idCate='.$val['cate_id'].'" class="btn btn-secondary"><i class="far fa-edit"></i> Edit</a>
        <a href="delete.php?do=deleteCate&id='.$val['cate_id'].' " class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</a>
      </div>
    </div>
  </div>

';}
?>
</div>
</div>
<?php
include 'templet/footer.php';

?>