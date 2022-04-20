<html>
<? session_start(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blue Care</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap v4.5.2 css -->
    <link rel="stylesheet" href="css/bootstrap4.min.css">
</head>
<body>
<?php
        $conn = mysqli_connect("localhost:3307","root","root","blue_care");
        $query = "SELECT * FROM organise_cleanup where email != 'null' and doc>CURDATE()";
        $result = mysqli_query($conn, $query);
    $rowCount = mysqli_num_rows($result);
    if($rowCount > 0){
?>

         
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">BLUE CARE</a>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="admin_organize.php">ORGANIZE BEACH CLEAN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="approve_form.php">USER FORM APPROVAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog_post.php">BLOG</a>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="logout.php">
        
        <a class="navbar-brand" href="#">Admin</a>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
      </form>
    </div>
  </nav>

<div class="approval_table p-5">
<form method="POST">
<table class="table" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th scope="col">FIRST NAME</th>
        <th scope="col">LAST NAME</th>
        <th scope="col">EMAIL ADDRESS</th>
        <th scope="col">CONTACT NUMBER</th>
        <th scope="col">DATE OF CLEAN</th>
        <th scope="col">BEACH NAME</th>
        <th scope="col">BEACH ADDRESS</th>
        <th scope="col">TOWN/CITY</th>
        <th scope="col">MEETING POINT</th>
        <th scope="col">START TIME</th>
        <th scope="col">END TIME</th>
        <th scope="col">APPROVE</th>
      </tr>
    </thead>
    <tbody>
    <? 
    while ($row = (mysqli_fetch_assoc($result))) { ?>
    <td style="display:none"><input type='text' name='id' value="<? echo $row['id'] ?>"></td>;
    <?echo "<td>".$row["fname"]."</td>";
    echo "<td>".$row["lname"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["mob"]."</td>";
    echo "<td>".$row["doc"]."</td>";
    echo "<td>".$row["bname"]."</td>";
    echo "<td>".$row["addr"]."</td>";
    echo "<td>".$row["city"]."</td>";
    echo "<td>".$row["meet_pt"]."</td>";
    echo "<td>".$row["start"]."</td>";
    echo "<td>".$row["end"]."</td>";
    echo "<td><input type='checkbox' name='approve'></td></tr>";
  }
    ?>
    </tbody>
  </table>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
   </form>
  </div>
  <? } 
  	if(isset($_POST['submit'])) {
		if(isset($_POST['approve'])) {
			$id = $_POST['id'];
			$sql = "select * from organise where id='$id'";
			$res = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($res);
			
			if($num>0) {
				echo "<center>Record already exists</center>";
			}
			else {
				$sel_query = "select * from organise_cleanup where id='$id'";
				$res = mysqli_query($conn,$sel_query);
				$num = mysqli_num_rows($res);
				while($row = mysqli_fetch_assoc($res)) { 
					$beachname= $row['bname']; $date= $row['doc']; $addr= $row['addr']; $meet= $row['meet_pt']; $stime=$row['start']; $etime=$row['end'];
					$sql="insert into organise(id,name,org_date,location,meet_pt,start,end) values ('$id','$beachname','$date','$addr','$meet', '$stime', '$etime')";
					$sql1 = "select * from beach where bname='$beachname'";
					$result = mysqli_query($conn,$sql1);
					$num1 = mysqli_num_rows($result);
					if($num1==0) {
						$query = "insert into beach values ('$beachname')";
						mysqli_query($conn,$query);
					}
					mysqli_query($conn,$sql);
				}
				
			}
		}
  	}?>
</body>
</html>
