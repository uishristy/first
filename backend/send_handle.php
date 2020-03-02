<?php session_start();
include 'pdo_class_data.php';
include 'connection.php';
include 'add_notification_user.php';
include 'administrator/function.php';
$pdo_auth = authenticate();
$pdo = new PDO($dsn, $user, $pass, $opt);

extract($_REQUEST);


  if($pdo_auth['balance']<$_REQUEST['token_no']){
    header('Location:sell.php?choice=error&value=You dont have enough Funds to transfer');
    exit();
  }

  if($_REQUEST['to_address']==""){
    header('Location:sell.php?choice=error&value=Please Enter Transfer Wallet Address');
    exit();
  }

  if($_REQUEST['token_no']<=0){
    header('Location:sell.php?choice=error&value=Amount of Token Must be Greater That Zero');
    exit();
  }


  $tx_hash = "0x".md5(date("U")).md5(date("Y"));
  $table = "sell_requests";
  $from_address = $pdo_auth['tx_address'];


    $key_list = "`to_address`,`from_address`, `token`, `user_id`, `user_name`, `tx_hash`";
    $value_list = "'".$to_address."',";
    $value_list.= "'".$from_address."',";
    $value_list.="'".$token_no."',";
    $value_list.="'".$pdo_auth['id']."',";
    $value_list.="'".$pdo_auth['name']."',";
    $value_list.="'".$tx_hash."'";   

      try {
          $stmt = $pdo->prepare("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
     $stmt->execute();

     //decrese from senders account
     // $total = $_REQUEST['balance']-$_REQUEST['token_no']-0.5;  
     $total = $_REQUEST['balance']-$_REQUEST['token_no']-0;  
     // Deduct .5BBT as Transaction Cost
     //echo $total;   
      try {
        //echo "UPDATE users SET `balance`= '".$total."' WHERE id=".$pdo_auth['id'];
          $stmt = $pdo->prepare("UPDATE users SET `balance`= '".$total."' WHERE id=".$pdo_auth['id']);
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
     // $user = $stmt->fetch();
     
     // add into recievers account
      try {
          $stmt = $pdo->prepare("SELECT id,balance FROM users WHERE tx_address LIKE '".$to_address."'");
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetch();
     // int_r($user);


      $total = $user['balance']+$_REQUEST['token_no'];  
      //echo $total;   
      try {
          $stmt = $pdo->prepare('UPDATE users SET `balance`= "'."".$total."".'" WHERE id='.$user['id']);
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      //$user = $stmt->fetch();




      // Starts Here monitoring the Transactions
        $tx_hash = "0x".md5(date("U")).md5(date("Y"));
        $table = "transfer";
        $from_address = $pdo_auth['tx_address'];


          $key_list = "`to`,`from`, `tx_address`, `tokens`, `status`, `process`";
          $value_list = "'".$to_address."',";
          $value_list.= "'".$from_address."',";
          $value_list.="'".$tx_hash."',";
          $value_list.="'".$token_no."',";
          $value_list.="'Success',";
          $value_list.="'Sent Tokens'";   

          try {
              $stmt = $pdo->prepare("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
          } catch(PDOException $ex) {
              echo "An Error occured!"; 
              print_r($ex->getMessage());
          }
          
          $stmt->execute();


      //ends here m,onitoring Transfers
  
  add_notification_user("A Send Request Executed to $to_address", "user", $pdo_auth['id']);
  add_notification("A Send Request Exected from $from_address to $to_address from User", "admin");
  header('Location:sent_tokens.php?choice=success&value=Your Token Has been Transferred to Desired Address');
//}

?>