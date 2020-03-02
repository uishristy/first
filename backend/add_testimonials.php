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
                        <h4 class="page-title">Add Testimonials </h4>
                        <ol class="breadcrumb p-0">                           
                            <li><a href="#"><?php echo $pdo_auth['name']; ?></a></li>
                            <li class="active"> Add Testimonials  </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row">     
                <div class="col-xl-11 col-xs-12">
                    <form action="add_testimonials_handle.php" method="POST" enctype="multipart/form-data" >
                      <div class="card-box items">
                        <div style="padding-bottom: 5px;"></div>
                        <h2 style="font-size: 16px;">Add Testimonials </h2> <hr/>                        

                        <div style="padding:10px">
                          <label>Enter Testimonials  Name</label>
                          <input type="text" name="testimonials_title" placeholder="Testimonials Title" class="form-control">
                        </div>

                        <div style="padding:10px">
                          <label>Enter Testimonial</label>
                          <textarea  id="editor1" name="testimonials_desc" placeholder="Testimonials Description Here" rows="5" class="form-control"></textarea>
                        </div>

                        <div style="padding:10px">
                          <label>Enter Place</label>
                          <input type="text" name="testimonials_tags" placeholder="Enter Place from it Belongs" class="form-control">
                        </div>

                         <div style="padding:10px">
                          <label>Attach Images</label>
                          <input type="file" name="file" placeholder="Attach Image" class="form-control">
                        </div>

                        <div style="padding:10px;"><input type="submit" value="Add Testimonials Here " class="btn btn-danger" /></div>
                     </div>
                    </form>
                </div><!-- end col-->
            </div>
           

        </div> 
    </div>
</div>
<?php require 'includes/footer_start.php' ?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="assets/pages/jquery.dashboard.js"></script>
<script type="text/javascript" src="match.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
   $(function() {
    $('.items').matchHeight({
      byRow: true,
      property: 'height',
      target: null,
      remove: false
  });
  });
 });
</script>
 <script>
      CKEDITOR.replace( '' );
  </script>

<?php require 'includes/footer_end.php' ?>
