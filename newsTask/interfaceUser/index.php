<?php
include 'templet/header.php';
include 'templet/navbar.php';
$array = lastfive('artical');
$count = count($array);

?>
<div class="container-fluid paddding mb-5">
        <div class="row mx-0">
            <?php if (!empty($array)) {?>
                    <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height"><img src="../Admin/uplode/<?php echo $array[0]['image']?>" alt="img"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font">
                                <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Dec 31,2017
                                </a></div>
                                <div class=""><a href="single.html" class="fh5co_good_font"> After all is said and done, more is said than done </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <?php $i=1;
                                while ($i < $count) {?>
                                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                                        <div class="fh5co_suceefh5co_height_2"><img src="../Admin/uplode/<?php echo $array[$i]['image']?>" alt="img"/>
                                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                                <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Oct
                                                    28,2017 </a></div>
                                                <div class=""><a href="single.html" class="fh5co_good_font_2"> After all is said and done, <br>more is said than done </a></div>
                                            </div>
                                        </div>
                                    </div>
                            <?php $i++; }?>
                        </div>
                    </div>
            <?php } ?>
        </div>
</div>

<!-- #################################### -->
<div class="container-fluid pb-4 pt-4 paddding">
<div class="container paddding">
    <div class="row mx-0">
    
  
<?php

 foreach (fetchData('category') as $val)  {
     echo '<div  id="'.$val['name_category'].'"class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
     <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4" >'.$val['name_category'].'</div>
 </div>';
foreach (innerJoin($val['cate_id']) as $val){
echo'     <div class="row pb-4">
<div class="col-md-5">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="../Admin/uplode/'.$val['image'].'" alt=""/></div>
                        <div></div>
                    </div>
                </div>
                <div class="col-md-7 animate-box">
                    <a href="single.html" class="fh5co_magna py-2"> '.$val['title'].' </a> <a href="single.html" class="fh5co_mini_time py-3"> Thomson Smith -
                    April 18,2016 </a>
                    <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </div>
                </div>
 
        </div>
  ';}}
?>

        </div>
        </div>
    </div>

<?php
include 'templet/footer.php';

?>