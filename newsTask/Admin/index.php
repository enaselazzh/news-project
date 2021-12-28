<?php
include 'templet/header.php';
include 'templet/navbar.php';
include 'config.php'
?>
<div class="container">
    <h1>Dashboard</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Category</th>
      <th scope="row">Action</th>
      <th scope="col">#ID_Articles</th>
      <th scope="col">Articles</th>
      <th scope="row">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      foreach(innerJoin() as $val){
   echo' <tr>
      <th scope="row">'.$val['cate_id'].'</th>
      <td>'.$val['name_category'].'</td>
      <td><a href="editCategory.php?idCate='.$val['cate_id'].'" class="btn btn-warning"><i class="far fa-edit"></i>Eidt</a>
      <a href="delete.php?do=deleteArt&id='.$val['cate_id'].'" class="btn btn-danger"><i class="far fa-trash-alt"></i>Delete</a></td>
      <th scope="row">'.$val['art_id'].'</th>
      <td>'.$val['title'].'</td>
      <td><a href="editArticles.php?art_id='.$val['art_id'].'" class="btn btn-warning"><i class="far fa-edit"></i>Eidt</a>
    <a href="delete.php?do=deleteCate&art_id='.$val['art_id'].'" class="btn btn-danger"><i class="far fa-trash-alt"></i>Delete</a></td>
    </tr>';  }
    ?>
  
  </tbody>
</table>
</div>
<?php
include 'templet/footer.php';

?>