<?php 
    include 'backend/pdo_class_data.php';
    include 'backend/connection.php';    
    include 'backend/administrator/function.php';    
    $pdo = new PDO($dsn, $user, $pass, $opt);  
    $category = base64_decode($_REQUEST['e6da44926b498d999e97cf271a39e673']);  
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<title><?php echo $category; ?> || <?php include'title.php';?></title>
	<?php include'head.php';?>
</head>
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
<body>
	<div class="wrapper">
		<?php include'header.php';?>
		<div class="breadcrumb-tow" style="background:url(images/bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content breadcrumb-content-tow">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><?php echo $category; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
		
		<div class="shop-area mb-70 mt-20">
		    <div class="container">
		        <div class="row">
               <div class="col-lg-3">
                  <div class="product-filter  mb-35" style="box-shadow:0px 5px 5px #ccc; padding:10px;">
                                      <h5>All Plant Category </h5>
                                        <div class="blog_Archives__sidbar">
                                            <ul>
                                                <?php 
                                              try {
                                                $stmt = $pdo->prepare('SELECT * FROM `plant_category` ORDER BY Date DESC');
                                                } catch(PDOException $ex) { echo "An Error occured!"; print_r($ex->getMessage());   }
                                                $stmt->execute();
                                                $menu = $stmt->fetchAll();      
                                                $array = array("26","27","28","29","30","31");
                                                foreach ($menu as $key => $value) {
                                                    if(in_array($value["id"],$array)){
                                                        continue;
                                                    }
                                                    echo '<li style="border-bottom:1px solid #ccc;"><a href="plant_category.php?e6da44926b498d999e97cf271a39e673='.base64_encode($value['category']).'">'.$value['category'].'</a></li>';
                                                }
                                           ?>  
                                            </ul>
                                      </div>
                                    </div>
                </div>
		            <div class="col-lg-8 ">
		                <div class="shop-layout">
		                    <div class="shop-product">
		                        <div id="myTabContent-2" class="tab-content">
		                            <div id="grid" class="tab-pane fade show active">
		                                <div class="product-grid-view">
		                                    <div class="row">
                                                 <?php 
                        try {
                          $stmt = $pdo->prepare('SELECT * FROM `plant_products` WHERE category="'.$category.'" ORDER BY Date DESC');
                          //echo 'SELECT * FROM `products` WHERE category="'.$lata['category'].'" ORDER BY Date DESC';
                          } catch(PDOException $ex) {
                              echo "An Error occured!"; 
                              print_r($ex->getMessage());
                          }
                          $stmt->execute();
                          $user = $stmt->fetchAll();
                          $num = $stmt->rowCount();
                          $i=0;
                          if($num==0){
                            echo '<div style="padding:20px;"><h2>No data has been Found.</h2></div>';
                          }
                          foreach ($user as $key => $value) {                                    
                            echo '

     <div class="col-md-4 col-sm-12 mb-10">
		     <div class="single-product mb-25" style="border: 1px solid #009846;">
                    <div class="product-img img-full">
                             <a href="plant_desc.php?product_e6da44926b498d999e97cf271a39e673='.base64_encode($value['id']).'">
                              <img src="backend/plant/small_thumb/'.$value['thumbnail'].'"  alt="'.$value['product_title'].'">
                            </a>
                           
                                                            
                    </div>
<div class="product-content" style="border-top: 2px solid  #009846;">
<h2><a href="plant_desc.php?product_e6da44926b498d999e97cf271a39e673='.base64_encode($value['id']).'">
'.$value['product_title'].'
</a></h2>
<div class="product-price">
 <div class="price-box"  >
  <span class="regular-price">Rs. '.$value['price'].'</span>
   </div>
                                                                <div class="add-to-cart">
                                                                    <a href="plant_desc.php?product_e6da44926b498d999e97cf271a39e673='.base64_encode($value['id']).'">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Single Product End-->
		                                        </div>
                            ';
                            $i++;
                          }
                     ?> 


		                                    </div>
		                                </div>
		                            </div>
		                        
		                        </div>
		                    </div>
		                    <!--Shop Product End-->
		                </div>
		            </div>
               
		        </div>
		    </div>
		</div>

		<?php include'footer.php';?>
	</div>
<?php include'scripts.php';?>
</body>


</html>
