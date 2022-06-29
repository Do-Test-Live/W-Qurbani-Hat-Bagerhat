<?php
require 'dbconfig.php';
$id = $_GET['id'];
$sql = "SELECT * FROM product,admin WHERE product.user_name= admin.username AND product.id = '$id'";
$result =  mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<div class="single-product shop-quick-view-ajax clearfix">
   <div class="ajax-modal-title">
      <h2><?php echo 'QHB-' . $id ?> | <?php echo $row['pname']; ?></h2>
   </div>
   <div class="product modal-padding clearfix">
      <div class="col_half nobottommargin">
         <div class="product-image">
            <div class="fslider" data-pagi="false">
               <div class="flexslider">
                  <div class="slider-wrap">
                     <div class="slide"><a href="#"><img src="https://admin.qurbanihatbagerhat.com/<?php echo $row['pimg']; ?>" alt="No image available"></a></div>
                     <?php
                     $values = explode(',', $row['prel']);
                     foreach ($values as $value) {
                     ?>
                        <div class="slide"><a href="#"><img src="https://admin.qurbanihatbagerhat.com/<?php echo $value; ?>" alt="No image available"></a></div>
                     <?php
                     }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col_half nobottommargin col_last product-desc">
         <div class="product-price"> <b><ins><?php echo $row['pprice']; ?>&nbsp;BDT/=</ins></b></div>
         <div class="clear"></div>
         <div class="line"></div>
         <h3>
             <div class="product-price font-primary">
			    <ins>Weight: <?php 	$my_str = ''.$row['pgms'].'';
                // Display replaced string
                echo str_replace("$;", " Age: ", $my_str); ?></ins>
                | <ins><?php echo $row['username']; ?></ins>
            </div>
         </h3>
         <div class="line"></div>
         <h4><?php echo $row['psdesc']; ?></h4>
         <p><?php echo $row['mobile']; ?></p>
         <p><?php echo $row['area']; ?></p>
      </div>
   </div>
</div>