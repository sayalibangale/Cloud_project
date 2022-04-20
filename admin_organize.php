<!DOCTYPE html>
<html lang="en">
<? session_start(); ?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap v4.5.2 css -->
    <link rel="stylesheet" href="css/bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    </head>
<style>
     input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      align-items: center;
        }
    
    
    input[type=submit]:hover {
      background-color: #45a049;
        }
    .beachtitle{
    text-align: center;
  }
    .container{
       padding-top:0.5%;
       padding-bottom:0.5%;  
   }
    .organize_form {
        padding : 0 10%;
    }
</style>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">BLUE CARE</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <!--<li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>-->
            <li class="nav-item">
          <a class="nav-link" href="admin_organize.php">ORGANIZE BEACH CLEAN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="approve_form.php">USER FORM APPROVAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog_post.php">BLOG</a>
          </li>
            <!--<li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>-->
          </ul>
          <form class="form-inline my-2 my-lg-0" action="logout.php">
            
            <a class="navbar-brand" href="#">Admin</a>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
          </form>
        </div>
      </nav>
    
<div class="container p-5">
<div class="row mb-4">
  <div class="col-md-8 offset-md-2">
    <form method="post">

<div class="beachtitle">
  <h2 style="text-align: center;"><strong>BEACH DETAILS</strong></h2>
  </div><br><br>
  <div class="form-group">
<label>DATE OF CLEAN *</label>
<input type="date" class="form-control" name="doc" required="required">
</div>
  <div class="form-group">
<label>BEACH NAME *</label>
<input type="text" class="form-control" name="bname" id="bname" required="required">
</div>
  <div class="form-group">
<label>BEACH ADDRESS *</label>
<input type="text" class="form-control" name="addr" required="required">
</div>
<div class="form-group">
<label>TOWN/CITY *</label>
<input type="text" class="form-control" name="city" required="required">
</div>
<div class="form-group">
<label>MEETING POINT</label>
<input type="text" class="form-control" name="meet_pt">
</div>
<div class="form-group">
<label>START TIME *</label>
<input type="time" class="form-control" name="start" required="required">
</div>
<div class="form-group">
<label>END TIME</label>
<input type="time" class="form-control" name="end">
</div>
<input type="submit" class="btn btn-warning text-center" name="approve" value="SCHEDULE BEACH CLEAN">
    </form>
    <?php
			if(isset($_POST['approve'])) {
				$beach_name=$_POST['bname']; 
				$date=$_POST['doc']; $addr=$_POST['addr']; $city=$_POST['city']; $meet=$_POST['meet_pt']; $stime=$_POST['start'];
				$etime=$_POST['end'];
					$conn = mysqli_connect("localhost:3307","root","root","blue_care");
					$query = "insert into organise_cleanup(bname,doc,addr,city,meet_pt,start,end) values ('$beach_name','$date','$addr','$city','$meet', '$stime', '$etime')";
					$select_query = "select * from organise_cleanup where bname='$beach_name' && doc='$date'";

					$result = mysqli_query($conn,$select_query);
					$num = mysqli_num_rows($result);
					if($num==0) 
					{
						mysqli_query($conn,$query);
						echo "<div style='color:#000; font: 20px serif'><center>Beach cleanup scheduled successfully</center></div>";
						$sql1 = "select * from beach where bname='$beach_name'";
						$result = mysqli_query($conn,$sql1);
						$num1 = mysqli_num_rows($result);
						if($num1==0) {
							$query = "insert into beach values ('$beach_name')";
							mysqli_query($conn,$query);
						}
						$sel_query = "select * from organise_cleanup where bname='$beach_name' && doc='$date'";
						$res=mysqli_query($conn,$sel_query);
						$row = mysqli_fetch_assoc($res); 
						$id = $row['id'];
						$sql = "insert into organise(id,name,org_date,location,meet_pt,start,end) values ('$id','$beach_name','$date','$addr','$meet', '$stime', '$etime')";
						mysqli_query($conn,$sql);
					}
					else {
						echo "<div style='color:#000; font: 20px serif'><center>Beach cleanup has already been scheduled</center></div>";
					}
				}
		?>
  </div>
</div>
</div>

<script type="text/javascript">
$(function() {
$( "#bname" ).autocomplete({
source: 'beachname_details.php',
});
});
</script>
  <!-- Script -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         
        <!-- jQuery UI -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</body>
</html>
