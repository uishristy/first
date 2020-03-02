<?php require 'includes/header_start.php'; ?>

<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
  <!-- Plugins css -->
    <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<?php require 'includes/header_end.php'; ?>
<?php $lata = get_data_id_data("popups", "id", $_REQUEST['id']); //print_r($lata); ?>

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
                        <h4 class="page-title">Update popup </h4>
                        <ol class="breadcrumb p-0">                           
                            <li><a href="#"><?php echo $pdo_auth['name']; ?></a></li>
                            <li class="active"> Update popup  </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row">     
                <div class="col-xl-8 col-xs-12">
                    <form action="update_popup_handle.php" method="POST" enctype="multipart/form-data" >
                      <div class="card-box items">
                        <div style="padding-bottom: 5px;"></div>
                        <h2 style="font-size: 16px;">Update popup </h2> <hr/>
                        

                        <div style="padding:10px">
                          <label>Enter Date of Meetups</label>
                          <input type="text" name="date_of_meetup" id="datepicker" value="<?php echo $lata['date']; ?>" placeholder="Date of Meetups" class="form-control">
                        </div>

                         <div style="padding:10px">
                          <label>Enter Time of Meetups</label>
                          <input type="text" name="time_of_meetup" placeholder="Time of Meetups" value="<?php echo $lata['time']; ?>" class="form-control clockpicker">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $lata['id'];?>">

                        <div style="padding:10px">
                          <label>Enter popup  Title</label>
                          <input type="text" name="popup_title" placeholder="popup Title" value="<?php echo $lata['title']; ?>" class="form-control">
                        </div>  

                        <div style="padding:10px">
                          <label>Enter Description</label>
                          <textarea  id="editor1" name="popup_desc" placeholder="popup Description Here" class="form-control"><?php echo $lata['description']; ?></textarea>
                        </div>

                       

                        <div style="padding:10px;"><input type="submit" value="Update popup Here " class="btn btn-success" /></div>
                     </div>
                    </form>
                </div><!-- end col-->
            </div>
           

        </div> 
    </div>
</div>
<?php require 'includes/footer_start.php' ?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
      CKEDITOR.replace( 'editor1' );
  </script>
  <script src="assets/js/jquery.core.js"></script>
  <script src="assets/js/jquery.app.js"></script>
    <script src="assets/plugins/moment/moment.js"></script>
    <script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="assets/plugins/mjolnic-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/plugins/clockpicker/bootstrap-clockpicker.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script type="text/javascript">
      $("#datepicker").datepicker({format: 'dd/mm/yyyy'});
      $('.clockpicker').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    </script>

  
  

<?php require 'includes/footer_end.php' ?>
