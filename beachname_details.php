<?php
$conn = mysqli_connect("localhost:3307","root","root","blue_care");
if (isset($_GET['term'])) {
     
   $query = "SELECT * FROM beach WHERE bname LIKE '{$_GET['term']}%' LIMIT 25";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      $res[] = $user['bname'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>
