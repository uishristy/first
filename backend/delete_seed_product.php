<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);  

   $table = "seed_products";
   $id= $_REQUEST['id'];
   try {
    $stmt = $pdo->prepare('DELETE FROM  '.$table.'  WHERE id = :id');
    } catch(PDOException $ex) {
        echo "An Error occured!"; 
        return ($ex->getMessage());
    }
   $stmt->execute(['id' => $id]);
   add_notification("A Product  has been Deleted", "admin");
   header('Location:view_seed.php?choice=success&value=Products has been Deleted Successfully');  
   exit();   
?>
