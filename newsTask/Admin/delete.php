<?php 
include 'config.php';

$do = $_GET['do'];
$id = $_GET['id'];
$art_id =$_GET['art_id'];
if($do == 'deleteCate'){
    delete('category',$id,' cate_id=?');
    header('location:category.php');
}

if($do == 'deleteArt'){
    delete('artical',$art_id,' art_id=?');
    header('location:articles.php');
}



?>
