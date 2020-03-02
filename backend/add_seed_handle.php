<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'add_notification_user.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'resize_image.php';
    

    $target_dir = "seed/";
    $mota =  date("U").basename($_FILES["thumbnail"]["name"]);
    $target_file = $target_dir .$mota;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        header('Location:add_seed.php?choice=success&value=Sorry File Already Exist');
        exit();
    }
    // Check file size
    if ($_FILES["thumbnail"]["size"] > 500000000) {
        header('Location:add_seed.php?choice=success&value=Sorry File too Large ');
        exit();
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"  && $imageFileType != "pdf") {
      header('Location:add_seed.php?choice=success&value=Sorry, only JPG, JPEG, PNG & GIF files are allowed.');       
        exit();
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    //echo "mastar";
         header('Location:add_seed.php?choice=success&value=Sorry, your File was Not Uploaded');
         exit();
    } else {
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
          $dir = "seed/";
          $file = date("U").$_FILES['thumbnail']['name'];
          $file_src = $dir."/".$file;       
          $main_thumb_file = $dir."/main_thumb/".$file;
           smart_resize_image($file_src , null, 500 , 288 , false , $main_thumb_file , false , false ,80 ); 
          $small_thumb_file = $dir."/small_thumb/".$file;
          smart_resize_image($file_src , null, 87 , 91 , false , $small_thumb_file , false , false ,80 ); 



          $count = count($_FILES['product_images']['name']);
          $arrayt = array();
           for ($i=0; $i < $count; $i++) { 
              $file = date("U").$_FILES['product_images']['name'][$i];
              if($_FILES['product_images']['name'][$i]!=""){ 
                  $arrayt[] = $file;
                  move_uploaded_file($_FILES['product_images']['tmp_name'][$i], $dir."/".$file);            
                  $file_src = $dir."/".$file;             
                  $resizedFile = $dir."/thumb/".$file;
                  $resizedFile2 = $dir."/opt/".$file;
                  smart_resize_image($file_src , null, 400 , 500 , false , $resizedFile , false , false ,80 ); 
                  smart_resize_image($file_src , null, 800 , 600 , false , $resizedFile2 , false , false ,80 );   
              }
              else{
                continue;
              }
        }
         $product_images = implode(",", $arrayt);
         //print_r($arrayt);

           $table = "seed_products";
              $key_list = "`product_title`,`sku`, `dimension_unit`, `category`, `description`,`status`, `thumbnail`, `product_images`, `price`, `video_link`";
              $value_list  = "'".$_REQUEST['product_title']."',";
              $value_list .= "'".$_REQUEST['product_sku']."',";
              $value_list .= "'".$_REQUEST['dimension_unit']."',";
              $value_list .= "'".$_REQUEST['product_category']."',";
              $value_list .= "'".$_REQUEST['product_desc']."',";
              $value_list .= "'".$_REQUEST['status']."',";
              $value_list .= "'".$mota."',";
              $value_list .= "'".$product_images."',";
              $value_list .= "'".$_REQUEST['product_price']."',";
              $value_list .= "'".$_REQUEST['video']."'";
              
              //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
              
              $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
              header('Location:view_seed.php?choice=success&value=product Added Successfully');              
              exit();
        } else {
          header('Location:view_seed.php?choice=success&value=Sorry, There Was an Error Uploading Your File');
           exit();
        }
    }
   
?>


