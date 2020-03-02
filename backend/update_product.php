<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<?php require 'includes/header_end.php'; ?>

<?php $lata = get_data_id_data("products", "id", $_REQUEST['id']); //print_r($lata); ?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add Products</h4>
                        <div class="clearfix" style="padding:10px;"></div>
                    </div>
                </div>
            </div>

            <?php  see_status2($_REQUEST); ?>
            <form action="update_product_handle.php" method="POST" enctype="multipart/form-data">
              <div class="row">               

                <div class="col-xl-4 col-xs-12">
                    <div class="card-box items">
                       
                       <div class="form-group">
                         <label>Please Enter Product Title</label>
                         <input type="text" class="form-control" required name="product_title" value="<?php echo $lata['product_title']; ?>" placeholder="Please Enter Title Here" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Product SKU</label>
                         <input type="text" class="form-control"  required name="product_sku" value="<?php echo $lata['sku']; ?>" placeholder="Please Enter Product SKU Here" style="padding: 10px;">
                         <input type="hidden" name="id" value="<?php echo $lata['id']; ?>">
                       </div>

                       <div class="form-group">
                         <label>Product Video</label>
                         <input type="text" class="form-control" value="<?php echo $lata['video_link']; ?>"  name="video" placeholder="Product Video link" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Dimension Unit</label>
                         <input type="text" class="form-control" required  name="dimension_unit"  value="<?php echo $lata['dimension_unit']; ?>" placeholder="Please Enter Dimension Unit" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Please Select Category</label>
                         <select class="form-control" style="padding: 10px;" name="product_category">
                          <option><?php echo $lata['category']; ?></option>
                          <?php 
                            try {
                                  $stmt = $pdo->prepare('SELECT * FROM `pr_category`   ORDER BY date DESC');
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll(); 
                              foreach($user as $key=>$value){                                 
                                echo '<option>'.$value['category'].'</option>';                                 
                            }           
                          ?>       
                         </select>
                       </div>

                        <div class="form-group">
                         <label>Select Status</label>
                         <select class="form-control" style="padding: 10px;" name="status">
                           <option><?php echo $lata['status']; ?></option>
                           <option>Select Availability Status</option>
                           <option>Available</option>
                           <option>Unavailable</option>                           
                         </select>
                       </div>
                       <div class="form-group">
                         <label>Product Price</label>
                         <input type="text" class="form-control"  value="<?php echo $lata['price']; ?>"   required name="product_price" placeholder="Please Enter Product Price Here, 12.00" style="padding: 10px;">
                       </div>
                   </div>
                </div><!-- end col-->  

                <div class="col-xl-8 col-xs-12">
                    <div class="card-box items">
                      

                       
                       <div class="form-group">
                         <label>Please Enter Description</label>
                         <textarea class="form-control" required id="editor1"   rows="6" name="product_desc" placeholder="Enter Description Here" style="padding: 10px;"><?php echo $lata['description']; ?></textarea>
                       </div>

                      
                       <div style="padding: 5px;"></div><hr/><div style="padding: 5px;"></div>
                       <button type="submit" id="oplo" class="btn btn-success btn-lg">Update Products</button>
                       
                   </div>
                </div><!-- end col-->              
            </div>
            </form>
        </div> <!-- container -->
    </div> <!-- content -->
</div>
<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<?php require 'includes/footer_start.php' ?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/pages/jquery.dashboard.js"></script>
 <script>
      CKEDITOR.replace( 'editor1' );
  </script>
<?php require 'includes/footer_end.php' ?>
