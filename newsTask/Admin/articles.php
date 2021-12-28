<?php
include 'templet/header.php';
include 'templet/navbar.php';
include 'config.php';
?>
<main class="my-5">
    <div class="container">
    <h1 class="text-center">Articles</h1>
    <a href="addArticles.php" class="btn btn-primary new"><i class="fas fa-plus-circle"></i> New Articles</a>
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
         <!--Section: Content-->
         <div class="col-md-9 mb-4">
         
        <section>
            <!-- Post -->
        <?php
        foreach (fetchData('artical') as $val){
            echo' 
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                  <img src="uplode/'.$val['image'].'" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
              </div>

              <div class="col-md-8 mb-4">
                <h5>'.$val['title'].'</h5>
                <p class="des">'.$val['description'].'</p> <span> ...<a  href=""  class="">Read More</a></span>
                <a  href="editArticles.php?art_id='.$val['art_id'].'"  class="btn btn-warning"><i class="far fa-edit"></i> Eidt</a>
                <a  href="delete.php?do=deleteArt&art_id='.$val['art_id'].'"class="btn btn-danger"><i class="far fa-calendar-times"></i> Delete</a>
              </div>
            </div>';}
            ?>
          </section>
          <!--Section: Content-->
        </div>
        <!--Grid column-->      
      </div>
  
      <!--Grid row-->

      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </main>
  <!--Main layout-->


 



   
<?php
include 'templet/footer.php';

?>