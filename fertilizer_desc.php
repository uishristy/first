<?php 
    include 'backend/pdo_class_data.php';
    include 'backend/connection.php';    
    include 'backend/administrator/function.php';    
    $pdo = new PDO($dsn, $user, $pass, $opt);    
    $category = base64_decode($_REQUEST['product_e6da44926b498d999e97cf271a39e673']);    
    $lata = get_data_id_data("fertilizer_products", "id", $category); // print_r($lata);   
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<title><?php echo $lata['product_title']; ?>|| <?php include'title.php';?></title>
	<?php include'head.php';?>
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
                                <li class="active"><?php echo $lata['product_title']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
		<div class="single-product-area mb-115 mt-20">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12 col-lg-5">
		                


                        <div class="product-details-img-tab">
                            <!--Product Tab Content Start-->
                            <div class="tab-content single-product-img">

                               <?php 
                            $foto = $lata['product_images'];
                            $foto = explode(",", $foto);
                            $i=0;
                            $j=1;
                            foreach($foto as $value){
                            if($i==0)
                                { 
                                    $active="active";
                                     } 
                                     else{ 
                                        $active ="";
                                     }
                              echo '  

                              <div class="tab-pane fade   '.$active.'" 
                              id="product'.$j.'">
                                  <div class="product-large-thumb img-full">
                                     <div class="easyzoom easyzoom--overlay">
                                        <a href="backend/fertilizer/'.$value.'">
                                            <img src="backend/fertilizer/'.$value.'" alt="'.$lata['product_title'].'" >
                                        </a>
                                        <a href="backend/fertilizer/'.$value.'" class="popup-img venobox" data-gall="myGallery">
                                        <i class="fa fa-search"></i></a>
                                     </div>
                                  </div>
                              </div>';
                                $i++;
                                $j++;
                            }
                        ?>  
                            </div>
                            <!--Product Tab Content End-->
                            <!--Product Tab Menu Start-->
                            <div class="product-menu">
                                <div class="nav product-tab-menu">

                                    <?php 
                            $foto1 = $lata['product_images'];
                            $foto1 = explode(",", $foto1);
                            $i=0;
                            $j=1;
                            foreach($foto1 as $value){
                            if($i==0)
                                { $active1="active"; } else{ $active1 ="";}
                              echo '  


                                  <div class="product-details-img">
                                    <a class="'.$active1.'" data-toggle="tab" href="#product'.$j.'"><img src="backend/fertilizer/'.$value.'" alt="'.$lata['product_title'].'" ></a>
                                  </div>
                                  ';
                                $i++;
                                $j++;
                            }
                        ?>   


                                  
                                </div>
                            </div>
                            <!--Product Tab Menu End-->
                        </div>


		            </div>
		            <div class="col-md-12 col-lg-7">
                        <!--Product Details Content Start-->
		                <div class="product-details-content mt-20">
                    <div class="col-12">
		                <div class="section-title ">
		                    <span>The Best collection</span>
		                    <h1 style="text-transform: uppercase;"><?php echo $lata['product_title']; ?></h1>
		                    RS.<?php echo $lata['price']; ?>
		                </div>
		                   <div class="">
                            	
                                <p><?php echo $lata['description']; ?></p>

                            </div>
                            <div class="product-meta">
                                <span class="posted-in">
                                        Categories: 
		                                <a href="#"><?php echo $lata['category']; ?></a>
		                               
		                            </span>
                            </div>
                            
                            <div class="single-product-quantity">
                                <div class="add-quantity">
                                    <div class="add-to-link">
                                        <button class="product-btn" data-text="add to cart">Contact Now</button>
                                    </div>
                                </div>
                           </div>
		            </div>
		                  

                           
                           
                          
                           
		                </div>
		                <!--Product Details Content End-->
		            </div>
		        </div>
		    </div>
		</div>
		
      <div class="Related-product mt-105 mb-100">
        <div class="container">
            <div class="row">
                <!--Section Title Start-->
                    <div class="col-12">
                        <div class="section-title text-center mb-35">
                            <h3>Related products</h3>
                        </div>
                    </div>
                    <!--Section Title End-->
            </div>
            <div class="row">
                <div class="product-slider-active">
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <!--Single Product Start-->
                        <div class="single-product mb-25">
                            <div class="product-img img-full">
                                <a href="single-product.html">
                                    <img src="img/product/product7.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <ul>
                                        <li><a href="#open-modal" data-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Vulputate justo</a></h2>
                                <div class="product-price">
                                    <div class="price-box">
                                        <span class="regular-price">$70.00</span>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single Product End-->
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <!--Single Product Start-->
                        <div class="single-product mb-25">
                            <div class="product-img img-full">
                                <a href="single-product.html">
                                    <img src="img/product/product9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <ul>
                                        <li><a href="#open-modal" data-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Ipsum imperdie</a></h2>
                                <div class="product-price">
                                    <div class="price-box">
                                        <span class="regular-price">$100.00</span>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single Product End-->
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <!--Single Product Start-->
                        <div class="single-product mb-25">
                            <div class="product-img img-full">
                                <a href="single-product.html">
                                    <img src="img/product/product11.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <ul>
                                        <li><a href="#open-modal" data-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Pellentesque position</a></h2>
                                <div class="product-price">
                                    <div class="price-box">
                                        <span class="regular-price">$90.00</span>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single Product End-->
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <!--Single Product Start-->
                        <div class="single-product mb-25">
                            <div class="product-img img-full">
                                <a href="single-product.html">
                                    <img src="img/product/product1.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <ul>
                                        <li><a href="#open-modal" data-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Eleifend quam</a></h2>
                                <div class="product-price">
                                    <div class="price-box">
                                        <span class="regular-price">$115.00</span>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single Product End-->
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <!--Single Product Start-->
                        <div class="single-product mb-25">
                            <div class="product-img img-full">
                                <a href="single-product.html">
                                    <img src="img/product/product3.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <ul>
                                        <li><a href="#open-modal" data-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Nulla sed stg</a></h2>
                                <div class="product-price">
                                    <div class="price-box">
                                        <span class="regular-price">$40.00</span>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single Product End-->
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <!--Single Product Start-->
                        <div class="single-product mb-25">
                            <div class="product-img img-full">
                                <a href="single-product.html">
                                    <img src="img/product/product5.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <ul>
                                        <li><a href="#open-modal" data-toggle="modal" title="Quick view"><i class="fa fa-search"></i></a></li>
                                        <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2><a href="single-product.html">Odio tortor consequat</a></h2>
                                <div class="product-price">
                                    <div class="price-box">
                                        <span class="regular-price">$90.00</span>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single Product End-->
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
