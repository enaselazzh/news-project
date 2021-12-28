<?php
include 'templet/header.php';
include 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $dec =$_POST['description'];
    $category = $_POST['category'];
    $name= $_FILES['img']['name'];
    $file_tmp= $_FILES['img']['tmp_name'];
    print_r($_FILES);
    $chr = explode('.',$name);
    $img = strtolower(end($chr));
    $path ='uplode/';
    $arrimg = array('gif','png','jpg');
     if(!empty($title) && in_array($img,$arrimg)){
          insertarticle('artical',$title,$name,$dec,$category);
            move_uploaded_file($file_tmp,$path.$name);
            header('location:articles.php');
     }else{
       
       echo 'plese enter img';
      //  header('location:addArticles.php');
     }
  }
?>
<div class="container">
    <h1>Add Articles</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST' enctype="multipart/form-data">
  <div class="mb-3">
    <input type="text" class="form-control" id="title" name='title' >
    <label for="title" class="form-label">Article Title</label>
  </div>

  <div class="mb-3">
  <label for="img">Article image</label>
    <input type="file"  id="img" name="img">
  </div>
  <div class="mb-3">
    
  <textarea class="form-control" placeholder="" name='description' id="article_description" ></textarea>
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
include 'templet/footer.php';

?>