<?php
include 'templet/header.php';
include 'config.php';

$id =$_GET['idArt'];
?>
<main class="my-5">
    <div class="container">
    <h1 class="text-center">Articles</h1>
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
         <!--Section: Content-->
         <div class="col-md-9 mb-4">
         
        <section>
            <!-- Post -->
        <?php
        foreach (rightjoin($id) as $val){
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
                <p>'.$val['description'].'</p>

                <a  href="" type="submit" class="btn btn-info">Read</a>
              </div>
            </div>';}
            ?>
          </section>
          <!--Section: Content-->
        </div>
        <!--Grid column-->      
      </div>
      </div>
  </main>
     
<?php
include 'templet/footer.php';

?>