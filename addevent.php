<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = $_REQUEST['user'];
  $name = $_REQUEST['name'];
  $sdate = $_REQUEST['sdate'];
  $stime = $_REQUEST['stime'];
  $edate = $_REQUEST['edate'];
  $etime = $_REQUEST['etime'];
  $loc = $_REQUEST['loc'];
  $pin = $_REQUEST['pin'];
  $url = $_REQUEST['url'];
  $conn = new mysqli("localhost", "root", "", "kasthuri");
  $sql = "INSERT INTO events VALUES ('$user', '$name', '$sdate', '$stime', '$edate', '$etime', '$loc', '$pin', '$url')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
?>
