<?php 
if(isset($_REQUEST['q']) && $_REQUEST['q'] == "upcoming"){
    $user = $_REQUEST['user'] ;
    $conn = new mysqli("localhost" , "root" , "" , "kasthuri") ;
    $currentDate = date('Y-m-d');
    $sql = "SELECT * FROM events WHERE user = '$user' AND sdate > '$currentDate'" ;
    $upcoming = array() ;
    $res = $conn->query($sql) ;
    if($res && $res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            $upcoming[] = $row ;
        }
    }
    echo json_encode($upcoming) ;
}

if(isset($_REQUEST['q']) && $_REQUEST['q'] == "ongoing"){
    $user = $_REQUEST['user'] ;
    $conn = new mysqli("localhost" , "root" , "" , "kasthuri") ;
    $currentDate = date('Y-m-d');
    $sql = "SELECT * FROM events WHERE user = '$user' AND sdate = '$currentDate'" ;
    $ongoing = array() ;
    $res = $conn->query($sql) ;
    if($res && $res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            $ongoing[] = $row ;
        }
    }
    echo json_encode($ongoing) ;
}
if(isset($_REQUEST['q']) && $_REQUEST['q'] == "ended"){
    $user = $_REQUEST['user'] ;
    $conn = new mysqli("localhost" , "root" , "" , "kasthuri") ;
    $currentDate = date('Y-m-d');
    $sql = "SELECT * FROM events WHERE user = '$user' AND sdate < '$currentDate'" ;
    $ongoing = array() ;
    $res = $conn->query($sql) ;
    if($res && $res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            $ongoing[] = $row ;
        }
    }
    echo json_encode($ongoing) ;
}
?>
