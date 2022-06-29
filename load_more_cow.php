<?php
$output = '';
$id = '';
sleep(1);
require 'dbconfig.php';
$sql = "SELECT * FROM product WHERE id > " . $_POST['last_id'] . " LIMIT 6";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_array($result)) {
?>
      <div class="col-lg-2 col-md-3 col-6 px-2">
         <div class="product iproduct clearfix">
            <div class="product-image">
               <div class="fslider" data-arrows="false" data-autoplay="4500">
                  <div class="flexslider">
                     <div class="slider-wrap">
                        <?php
                        $values = explode(',', $row['prel']);
                        foreach ($values as $value) {

                        ?>
                           <div class="slide item">
                              <a href="#">
                                 <img src="https://admin.qurbanihatkhulna.com/<?php echo $value; ?>" alt="No image available">
                              </a>
                           </div>
                        <?php
                        }
                        ?>
                     </div>
                  </div>
               </div>
               <div class="product-overlay">
                  <center><a href="viewProduct.php?id=<?php echo $row["id"]; ?>" data-lightbox="ajax"><i class="icon-line-eye"></i><span>বিস্তা‌রিত দেখুন</span></a></center>
               </div>
            </div>
            <?php
            if ($row['stock'] > 0) {
            ?>
               <center><span class="lead"><span class="badge badge-success">Available</span></span></center>
            <?php
            } else {
            ?>
               <center><span class="lead"><span class="badge badge-danger">Sold Out</span></span></center>
            <?php
            }
            ?>
            <div class="product-desc">
               <div class="product-title mb-1">
                  <h3><a href="#"><?php echo 'C-' . $row['id'] ?> | <?php echo $row['pname']; ?></a></h3>
               </div>

               <div class="product-price font-primary">
                  <ins><?php $my_str = '' . $row['pgms'] . '';
                        // Display replaced string
                        echo str_replace("$;", " Age: ", $my_str); ?></ins>
                  | <ins><?php echo $row['pprice']; ?>&nbsp;BDT/=</ins>
               </div>
               <div class="product-price font-primary"><ins><?php echo $row['area']; ?></ins></div>
            </div>
         </div>
      </div>
   <?php
      $id = $row["id"];
   }
   ?>
   <div id="remove_row">
      <center><button type="button" name="btn_more" data-id="<?php echo $id; ?>" id="btn_more" class="btn btn-success form-control">more</button></center>
   </div>
<?php

}
?>