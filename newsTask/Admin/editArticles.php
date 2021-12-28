<?php
include 'templet/header.php';
include 'config.php';
$art_id = $_GET['art_id']; 
foreach( fetchDatacon('artical', 'art_id = ?',$art_id) as $val){
?>
<div class="container">
    <h1>Add Articles</h1>
<form action="update.php" method='POST' enctype="multipart/form-data">
  <div class="mb-3">
  <input type="hidden"  name='id' value=<?php echo $val['art_id']?> >
    <input type="text" class="form-control" id="title" name='title'value=<?php echo $val['title']?> >
    <label for="title" class="form-label">Article Title</label>
 
  </div>
  <div class="mb-3">
  <label for="img">Article image</label>
    <input type="file"  id="img" name="img">
    <img src="uplode/<?php echo $val['image']?>" class="img-fixde" />

  </div>
  <div class="mb-3">
    
  <textarea class="form-control" placeholder="" name='description' id="article_description" ><?php echo $val['description']?></textarea>
    <label for="article_description" class="form-label" >Article Description</label>
 
  </div>
  <div class="mb-3">
  <label for="title">Category</label>
  <select  class="form-control" name="category">   
<?php 
 foreach(fetchData('category') as $val){
 echo' <option value="'.$val['cate_id'].'">'.$val['name_category'].'</option>';}
  ?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
}

include 'templet/footer.php';

?>