<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<?php require 'includes/header_end.php'; ?>


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
                        <h4 class="page-title">Add fertilizer</h4>
                        <div class="clearfix" style="padding:10px;"></div>
                    </div>
                </div>
            </div>

            <?php  see_status2($_REQUEST); ?>
            <form action="add_fertilizer_handle.php" method="POST" enctype="multipart/form-data">
              <div class="row">               

                <div class="col-xl-3 col-xs-12">
                    <div class="card-box items">


                         <div class="form-group">
                         <label>Please Select Category</label>
                         <select class="form-control" style="padding: 10px;" name="product_category">
                           <option value="">Select Product Category</option>
                            <?php 
                            try {
                                  $stmt = $pdo->prepare('SELECT * FROM `fertilizer_category`   ORDER BY date DESC');
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
                         <label style="color: red">Please Enter Product Title</label>
                         <input type="text" class="form-control" required name="product_title" placeholder="Please Enter Title Here" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Product SKU</label>
                         <input type="text" class="form-control"  required name="product_sku" placeholder="Please Enter Product SKU Here" style="padding: 10px;">
                       </div>

                    

                       <div class="form-group">
                         <label>Dimension Unit</label>
                         <input type="text" class="form-control" required  name="dimension_unit" placeholder="Please Enter Dimension Unit" style="padding: 10px;">
                       </div>

                       
                       
                        <div class="form-group">
                         <label>Is Featured</label>
                         <select class="form-control" style="padding: 10px;" name="is_featured">
                           
                           <option>Yes</option>
                           <option>No</option>                           
                         </select>
                       </div>

                    

                        
                   </div>
                </div><!-- end col-->  

                <div class="col-xl-3 col-xs-12">
                    <div class="card-box items">
                      <div class="form-group">
                         <label>Product Price</label>
                         <input type="text" class="form-control"  required name="product_price" placeholder="Please Enter Product Price Here, 12.00" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Select Status</label>
                         <select class="form-control" style="padding: 10px;" name="status">
                           <option>Select Availability Status</option>
                           <option>Available</option>
                           <option>Unavailable</option>                           
                         </select>
                       </div>

                       <div class="form-group">
                         <label>Please Enter Thumbnail Image</label>
                         <input type="file" required  class="form-control" name="thumbnail" placeholder="Please Enter Thumbnail" style="padding: 10px;">
                       </div>

                         <div class="form-group">
                         <label>Product Video</label>
                         <input type="text" class="form-control"   name="video" placeholder="Product Video link" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Enter Product Images <span style="color: red">(Multiple Hold CTRL)</span></label>
                         <input type="file" required  class="form-control" name="product_images[]" multiple="" placeholder="Please Enter Product Images" style="padding: 10px;">
                       </div>
                      

                      
                       
                   </div>
                </div><!-- end col-->  

                <div class="col-xl-5 col-xs-12">
                    <div class="card-box items">
                      <div class="form-group">
                         <label>Please Enter Description</label>
                         <textarea class="form-control" required id="editor1"  rows="6" name="product_desc" placeholder="Enter Description Here" style="padding: 10px;"></textarea>
                       </div>
                        <div style="padding: 5px;"></div><div style="padding: 5px;"></div>
                       <button type="submit" id="oplo" class="btn btn-primary ">Add Products</button>
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

