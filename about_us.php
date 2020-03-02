<?php 
    include 'backend/pdo_class_data.php';
    include 'backend/connection.php';    
    include 'backend/administrator/function.php';    
    $pdo = new PDO($dsn, $user, $pass, $opt);  
     
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<title>About Us || <?php include'title.php';?></title>
	<?php include'head.php';?>
</head>

<body>
	<div class="wrapper">
		<?php include'header.php';?>
		<div class="breadcrumb-tow" style="background:url(images/bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-title">
                            <h1>About Us</h1>
                        </div>
                        <div class="breadcrumb-content breadcrumb-content-tow">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-area">
		    <div class="container-fluid p-0">
		        <div class="row no-gutters">
		            <div class="col-md-12 col-lg-6">
		                <div class="about-us-img img-full">
		                    <img src="img/about/about1.jpg" alt="">
		                </div>
		            </div>
		            <div class="col-md-12 col-lg-6">
		                <div class="about-us-content">
		                    <h2><strong>About</strong> <br><strong>Thawait Nursery</strong></h2>
		                    <p><strong>Thawait nursery</strong> a brain child of mr.abhinav thawait and mr ankit thawait ,came in to being in the year 2013 .since than we have never looked back .being the largest producers of quality of flowers plants,we are also the largest suppliers all over india.<br> we have almost 1500 diffrent varaities of spacious plants.we source our products from all over india. <br>We at Thawait Nursery help our clients to celebrate gardening and nature in its true colors. With amazing live Plants, it is truly a Plant Lovers Paradise. Someone has rightly said.<br>

                            Thawait nursery located near sarangarh ,raigarh district chhatisgarh, we are always help our clints to celebrate gardening nd nature in its true colours.with 1500 amazing plants.and we doing the all of garden and nature realeted work ,landscape,cut flower production,irrigation,organic fertilizer,and all garden products etc</p>
		                    <a href="#" class="about-btn">view work </a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="fun-factor-area">
		    <div class="container-fluid p-0">
		        <div class="row no-gutters">
                    <!--Single Fun Factor Start-->
		            <div class="col-lg-3 col-md-6">
		                <div class="fun-factor-wrap">
		                    <div class="fun-factor-icon">
		                        <img src="img/icon/fun-fact1.png" alt="">
		                    </div>
		                    <div class="fun-facttor-content">
		                        <div class="fun-facttor-number">
		                            <h2><span class="counter">2169</span></h2>
		                        </div>
		                        <div class="fun-facttor-title">
		                            <h5>happy customers</h5>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <!--Single Fun Factor End-->
                    <!--Single Fun Factor Start-->
		            <div class="col-lg-3 col-md-6">
		                <div class="fun-factor-wrap">
		                    <div class="fun-factor-icon">
		                        <img src="img/icon/fun-fact2.png" alt="">
		                    </div>
		                    <div class="fun-facttor-content">
		                        <div class="fun-facttor-number">
		                            <h2><span class="counter">869</span></h2>
		                        </div>
		                        <div class="fun-facttor-title">
		                            <h5>AWARDS WINNED</h5>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <!--Single Fun Factor End-->
                    <!--Single Fun Factor Start-->
		            <div class="col-lg-3 col-md-6">
		                <div class="fun-factor-wrap">
		                    <div class="fun-factor-icon">
		                        <img src="img/icon/fun-fact3.png" alt="">
		                    </div>
		                    <div class="fun-facttor-content">
		                        <div class="fun-facttor-number">
		                            <h2><span class="counter">689</span></h2>
		                        </div>
		                        <div class="fun-facttor-title">
		                            <h5>happy customers</h5>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <!--Single Fun Factor End-->
                    <!--Single Fun Factor Start-->
		            <div class="col-lg-3 col-md-6">
		                <div class="fun-factor-wrap">
		                    <div class="fun-factor-icon">
		                        <img src="img/icon/fun-fact4.png" alt="">
		                    </div>
		                    <div class="fun-facttor-content">
		                        <div class="fun-facttor-number">
		                            <h2><span class="counter">2169</span></h2>
		                        </div>
		                        <div class="fun-facttor-title">
		                            <h5>COMPLETE PROJECTS</h5>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <!--Single Fun Factor End-->
		        </div>
		    </div>
		</div>
		<div class="service-item-area mb-120 mt-20">
		    <div class="container">
		        <div class="row">
                    <!--Single Service Item Start-->
		            <div class="col-md-4">
		               <div class="single-service-item">
		                   <div class="service-img img-full mb-35">
		                       <img src="img/service/service1.jpg" alt="">
		                   </div>
		                   <div class="service-content">
		                       <div class="service-title">
		                           <h4>MISSION</h4>
		                       </div>
		                       <p>We supply developed plants, landscaping varieties, Indigenous and exotic fruit plants, Spices, Rare variety collection and all garden material to Builders and Developers, Hotels and Resorts, Farmers, Industries, Institutions and Government Agencies by providing wide range of size- smallest to biggest, Wide range of variety, Bulk Availability Throughout year. We have expertise in Horticulture</p>
		                   </div>
		               </div> 
		            </div>
		            <!--Single Service Item End-->
                    <!--Single Service Item Start-->
		            <div class="col-md-4">
		               <div class="single-service-item">
		                   <div class="service-img img-full mb-35">
		                       <img src="img/service/service2.jpg" alt="">
		                   </div>
		                   <div class="service-content">
		                       <div class="service-title">
		                           <h4>VISION</h4>
		                       </div>
		                       <p>To emerge as the leading supplier of nursery products such as fruit plants, indoor & outdoor plants etc. in India on the basis of product consistency, quality, and unrivaled customer service.Our business makes a positive contribution to the society by helping agriculture, understand and take up significant global challenges. 
		                       </p>
		                   </div>
		               </div> 
		            </div>
		            <!--Single Service Item End-->
                    <!--Single Service Item Start-->
		            <div class="col-md-4">
		               <div class="single-service-item">
		                   <div class="service-img img-full mb-35">
		                       <img src="img/service/service3.jpg" alt="">
		                   </div>
		                   <div class="service-content">
		                       <div class="service-title">
		                           <h4>CORE VALUE</h4>
		                       </div>
		                       <p>Continuous Development <br>
		                       	Reliability <br>
		                        We aim to deliver high quality service in a timely, effective and efficient manner.</p>

		                   </div>
		               </div> 
		            </div>
		            <!--Single Service Item End-->
		        </div>
		    </div>
		</div>	

		<?php include'footer.php';?>
	</div>
<?php include'scripts.php';?>
</body>


</html>
