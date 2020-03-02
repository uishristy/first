
<?php 
    include 'backend/pdo_class_data.php';
    include 'backend/connection.php';    
    include 'backend/administrator/function.php';    
    $pdo = new PDO($dsn, $user, $pass, $opt);    
   
?><!doctype html>
<html class="no-js" lang="en">
<head>
	<title><?php include'title.php';?></title>
	<?php include'head.php';?>
	<style type="text/css">
	.enq2 {
    z-index: 10;
     right: 0px;
    position: fixed;
   
    padding: 6px 6px;
    background: green;
    top: 500px;
    color: #fff;
    font-weight: 500;
    
    cursor: pointer;
}</style>

</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e2ad9ffdaaca76c6fcfab68/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

       <span class="enq2"> <a href="https://api.whatsapp.com/send?l=en&phone=+919302959869"  target="_blank" style="color:#fff">
        	<img width="32" height="32" title="" alt="" src="images/whts.png" /></a></span>
        	
       

<body>
	<div class="wrapper">
		<?php include'header.php';?>
		<?php include'slider.php';?>
		<?php include'slider_down.php';?>
        <?php include'home_about.php';?>
		<?php include'section1.php';?>
		<?php include'home_plants.php';?>
		<?php include'section2.php';?>		
		<?php include'footer.php';?>
	</div>
<?php include'scripts.php';?>
</body>


</html>
