<?php
require 'dbconfig.php';
$record_per_page = 6;
$page = '';
$output = '';
if (isset($_POST["page"])) {
   $page = $_POST["page"];
} else {
   $page = 1;
}
$start_from = ($page - 1) * $record_per_page;
$query = "SELECT * FROM product LIMIT $start_from, $record_per_page";
$result = mysqli_query($con, $query);
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
               <h3><a href="#"><?php echo 'QHB-' . $row['id'] ?> | <?php echo $row['pname']; ?></a></h3>
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
}
$output .= '</table><br /><div align="center">';
$page_query = "SELECT * FROM product";
$page_result = mysqli_query($con, $page_query);
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records / $record_per_page);
for ($i = 1; $i <= $total_pages; $i++) {
   $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='" . $i . "'>" . $i . "</span>";
}
$output .= '</div><br /><br />';
echo $output;
?>