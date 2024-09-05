<?php 
$server = "localhost" ;
$username = "root" ;
$passwod = "";
$db = "Kasthuri" ;
$conn = mysqli_connect($server , $username , $passwod , $db ) ;
if($conn->connect_error){
    echo "Connect Error" ;
 }
   if($_REQUEST['q'] == 'login' ){
    $uname = trim($_REQUEST['uname']);
    $pwd = trim($_REQUEST['pwd'] );
    
    $sql = "SELECT * FROM users WHERE username='${uname}'";

    
     $details = $conn -> query($sql) ;
     $rows = mysqli_num_rows($details) ;
    if($rows>0){
    foreach($details as $user){
        if( $user['password'] == $pwd ){
       setcookie($user['username'], $user['password'],time() +(86400 * 30) , "/") ;
       echo "Successful Login" ;
        }
        else
        echo "Password mismatch" ;
    }
    
    }
    else
    echo "UserName does not found";
  
   }
   if( $_REQUEST['q'] == 'register'){
    $uname = $_REQUEST['uname'] ;
    $pwd = $_REQUEST['pwd'] ;
    $sql = "insert into users values('${uname}' , '${pwd}')" ;
    if( $conn->query($sql)){
        echo "Successful Registration" ;

    }
    else
    echo "Failed" ;
   }
   
?>
