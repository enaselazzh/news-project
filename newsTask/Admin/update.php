<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $dec =$_POST['description'];
    $category = $_POST['category'];
    $name= $_FILES['img']['name'];
    $file_tmp= $_FILES['img']['tmp_name'];
    $chr = explode('.',$name);
    $img = strtolower(end($chr));
    $path ='uplode/';
    $arrimg = array('gif','png','jpg');
     if(!empty($title) && in_array($img,$arrimg)){
        updateData('artical','art_id =?',$id,$title,$name,$dec,$category);
            move_uploaded_file($file_tmp,$path.$name);
            header('location:articles.php');
     }else{
         echo "error";
    // header('location:editArticles.php');
     }
  }

?>