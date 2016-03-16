<?php
//session_start();
//ob_start();
 header('Access-Control-Allow-Origin: *'); 

if(!isset($_REQUEST['cmd'])){
	echo '{"result": 0, "message": "Unknown command"}';
	return;
}

$cmd = $_REQUEST['cmd'];

switch ($cmd) {
  case 1:
  login();
  break;
  case 2:
  getEquipments();
  break;
  case 3:
  logout();
  break;
  case 4:
  addEquipment();
  break;
  case 5:
  getEquipment();
  break;
  case 6:
  editEquipment();
  break;
  case 7:
  deleteEquipment();
  break;
  case 8:
  sendSMS();
  break;
  case 9:
  getBorrowed();
  break;
  case 10:
  total();
  break;
  case 11:
  add_borrowed();
  break;
  default:
  echo '{"result": 0, "message": "Unknown command"}';
  return;
  break;
}


function login(){
	include "user.php";

    $myuser = new user();

    $username = $_GET['username'];
    $password = $_GET['password'];
    $myuser->Login($username, $password);
    $row=$myuser->fetch();
        
    if($row){
    session_destroy();
    session_start();

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
   echo '{"result": 1, "message": "Sign in successful"}';
//        
   return; 
    }
     echo '{"result": 0, "message": "Wrong details"}';
        return;
    
}

/**
*Method to add an equipment to the database
*/
function addEquipment(){
    include "adb.php";
    $eqp = new adb();
    $number = $_GET['id'];
    $name = $_GET['eName'];
    $manufacturer = $_GET['manu'];
    $price = $_GET['price'];
    $quantity = $_GET['qty'];
	
	$sql="INSERT INTO inven_products(product_id,products,manufacturer,price,quantity)VALUES('$number','$name','$manufacturer', $price,$quantity)";
    if(!$eqp->query($sql)){
        echo '{"result": 0, "message": "Equipment was not added"}';
        return;
    }
    echo '{"result": 1, "message": "Equipment was added successfully"}';
return;
}
function logout(){

    if(!$_SESSION['username']){
        echo '{"result": 0, "message": "User not loged in"}';
        return;
    }
    session_destroy();
    echo '{"result": 1, "message": "Loged out successfully"}';
    return;
}

/**
*Function to return a Lab from the database
*/
function getEquipment(){
   include "adb.php";
   $id=$_REQUEST['id'];
    $eqp = new adb();
    $str_query="SELECT * FROM inven_products WHERE id='$id'";
    $rows = $eqp->query($str_query);
   
    if(!$rows){
         
        echo '{"result": 0, "message": "You have no equipment in the database"}';
        return;
    }
$rows=$eqp->fetch();
    echo '{"result": 1, "equipment": [';
    // while($row){
        echo json_encode($rows);
        // $row = $myLab->fetch();
        // if($row){
            // echo ',';
        // }
    // }
    echo "]}";
    return;
}

/**
*Function to return all the inventory in the database
*/
function getEquipments(){
	include("adb.php");
		$obj=new adb();
		$sql="SELECT * FROM inven_products";
    
	if($obj->query($sql)){
       $row=$obj->fetch();
    echo '{"result": 1, "equipment": [';
    while($row){
        echo json_encode($row);
        $row=$obj->fetch();
        if($row){
            echo ',';
        }
        
    }
    echo "]}";
//        return;
    }else{
        echo "error ".mysql_error();
    }
}

function editEquipment(){ 
    include "adb.php"; 
    $eqp = new adb(); 
    $id = $_GET['id']; 
     $code = $_GET['cde']; 
     $name = $_GET['name']; 
     $price = $_GET['price']; 
     $quantity = $_GET['quant']; 
     $manu = $_GET['manu'] ;
    $str_query = "UPDATE inven_products SET product_id= $code,products='$name',quantity=$quantity,price=$price,manufacturer='$manu' WHERE id=$id";
     if(!$eqp->query($str_query)){
     echo '{"result": 0, "message": "equipment was not edited"}'; 
     return; 
}  echo '{"result": 1, "message": "Equipment was edited successfully"}'; 
return; 
}

function deleteEquipment(){ 
    include "adb.php";
    $eqp = new adb();
    $labId = $_GET['id'];
    $str_query="DELETE FROM inven_products WHERE id = $labId";
    if(!$eqp->query($str_query)){
        echo '{"result": 0, "message": "Equipment was not deleted "}';
        return;
    }
    echo '{"result": 1, "message": "Lab was deleted successfully"}';

    return;
}


function sendSMS(){
    //%2B$number
    $number=$_GET['number'];
    $pass=$_GET['prod'];
    
    $url = "https://api.smsgh.com/v3/messages/send?"
    . "From=MobileW"
    . "&To=%2B$number"
    . "&Content=Manufactured%20product%20$pass%20is%20running%20low"
    . "&ClientId=odfbifrp"
    . "&ClientSecret=rktegnml"
    . "&RegisteredDelivery=true";
 // Fire the request and wait for the response
 $response = file_get_contents($url) ;
 var_dump($response);
}

function getBorrowed(){
    	include("adb.php");
		$obj=new adb();
		$sql="SELECT * FROM items_borrowed";
    
	if($obj->query($sql)){
//        $obj->fetch();
        $row=$obj->fetch();
    echo '{"result": 1, "equipment": [';
    while($row){
        echo json_encode($row);
        $row=$obj->fetch();
        if($row){
            echo ',';
        }
        
    }
    echo "]}";
//        return;
    }else{
        echo "error ".mysql_error();
    }
}

function total(){
    include("adb.php");
		$obj=new adb();
		$sql="SELECT SUM(price) AS price FROM inven_products";
     $row = $obj->query($sql);
   
    if(!$row){
         
        echo '{"result": 0, "message": "You have no equipment in the database"}';
        return;
    }
$rows=$obj->fetch();
    echo '{"result": 1, "total": [';
    // while($row){
        echo json_encode($rows);
        // $row = $myLab->fetch();
        // if($row){
            // echo ',';
        // }
    // }
    echo "]}";
    return;
}

function add_borrowed(){
    include "adb.php";
    $eqp = new adb();
    $pid = $_GET['pid'];
    $name = $_GET['pname'];
    $user = $_GET['yname'];
    $ids = $_GET['yid'];
	
	$sql="INSERT INTO items_borrowed(product_id,product_name,user_name,user_id)VALUES('$pid','$name','$user','$ids')";
    if(!$eqp->query($sql)){
        echo '{"result": 0, "message": "Borrowed Equipment was not added"}';
        return;
    }
    echo '{"result": 1, "message": "Equipment was added successfully"}';
return;
}
//ob_end_flush();
?>