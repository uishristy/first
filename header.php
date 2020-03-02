
<header>
		    <div class="header-container">
		        <div class="header-area header-absolute header-sticky pt-30 pb-30">
                    <div class="container-fluid pl-50 pr-50">
                        <div class="row">
                            <!--Header Logo Start-->
                            <div class="col-lg-3 col-md-3">
                                <div class="logo-area">
                                    <a href="index.php">
                                        <img src="images/thawait_logo.png" alt="" style="width:70%">

                                    </a>
                                </div>
                            </div>
                            <!--Header Logo End-->
                            <!--Header Menu And Mini Cart Start-->
                            <div class="col-lg-9 col-md-9 text-lg-right">
                                <!--Main Menu Area Start-->
                                <div class="header-menu">
                                    <nav>
                                        <ul class="main-menu">
                                            <li><a href="index.php">home</a>
                                                
                                            </li>
                                            <li><a href="about_us.php">About</a>
                                            </li>
                                            <li><a href="#">Plants</a>
                                                <ul class="dropdown">
                                                        <li><a href="all_plant.php">All Plant Categories</a></li>
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
                                                    echo '<li><a href="plant_category.php?e6da44926b498d999e97cf271a39e673='.base64_encode($value['category']).'">'.$value['category'].'</a></li>';
                                                }
                                           ?>       
                                                    </ul>
                                            </li>
                                            <li><a href="#">Seeds</a>
                                              <ul class="dropdown">
                                                        <li><a href="all_seeds.php">All Seed Categories</a></li>
                                                        <?php 
                                              try {
                                                $stmt = $pdo->prepare('SELECT * FROM `seed_category` ORDER BY Date DESC');
                                                } catch(PDOException $ex) { echo "An Error occured!"; print_r($ex->getMessage());   }
                                                $stmt->execute();
                                                $menu = $stmt->fetchAll();      
                                                $array = array("26","27","28","29","30","31");
                                                foreach ($menu as $key => $value) {
                                                    if(in_array($value["id"],$array)){
                                                        continue;
                                                    }
                                                    echo '<li><a href="seed_category.php?e6da44926b498d999e97cf271a39e673='.base64_encode($value['category']).'">'.$value['category'].'</a></li>';
                                                }
                                           ?>       
                                                    </ul>
                                            </li>
                                            <li><a href="#">Fertilizers</a>
                                                  <ul class="dropdown">
                                                        <li><a href="all_fertilizer.php">All Fertilizers Categories</a></li>
                                                        <?php 
                                              try {
                                                $stmt = $pdo->prepare('SELECT * FROM `fertilizer_category` ORDER BY Date DESC');
                                                } catch(PDOException $ex) { echo "An Error occured!"; print_r($ex->getMessage());   }
                                                $stmt->execute();
                                                $menu = $stmt->fetchAll();      
                                                $array = array("26","27","28","29","30","31");
                                                foreach ($menu as $key => $value) {
                                                    if(in_array($value["id"],$array)){
                                                        continue;
                                                    }
                                                    echo '<li><a href="fertilizer_category.php?e6da44926b498d999e97cf271a39e673='.base64_encode($value['category']).'">'.$value['category'].'</a></li>';
                                                }
                                           ?>       
                                                    </ul>
                                            </li>
                                            
                                            <li><a href="">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                               
                            </div>
                            <!--Header Menu And Mini Cart End-->
                        </div>
                        <div class="row">
                            <div class="col-12"> 
                                <!--Mobile Menu Area Start-->
                                <div class="mobile-menu d-lg-none"></div>
                                <!--Mobile Menu Area End-->
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</header>