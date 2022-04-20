<!doctype html>
<html lang="en">
<? session_start(); ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Post_Blog</title>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="css/bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!--end-->
<script>


    tinymce.init({
      selector: 'textarea#editor',
      skin: 'bootstrap',
      plugins: 'lists, link, image, media',
      toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist | link ',
      menubar: false
    });
  </script>
  </head>
     
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



  <body>
    

    <div class="container mt-4 mb-4">
        <div class="row justify-content-md-center">
          <div class="col-md-12 col-lg-8">
            <h1 class="h2 mb-4">POST BLOG</h1>
            <form method="POST" enctype="multipart/form-data">
            <h6>Title</h6>
      <input class="form-control" type="text" name="title" placeholder="Title to the blog…"><br>
            <label>Describe the blog in detail</label>
            <div class="form-group">
               <textarea id="editor" name="content"></textarea>
            </div>
            
            <h6>Upload Image(jpeg/png/gif)</h6>
            <input type="file" name="uploadImage" accept="image/x-png,image/gif,image/jpeg" />
               <br><br>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
  <?php
    if(isset($_POST['submit'])) {
      
      $title = $_POST['title'];
      $desc = $_POST['content'];
      $filename = $_FILES["uploadImage"]["name"]; 
    $tempname = $_FILES["uploadImage"]["tmp_name"];     
        $folder = "image/".$filename; 
          
  $conn = mysqli_connect("localhost:3307","root","root","blue_care");
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO blog(title,content,uploadImage) VALUES ('$title', '$desc', '$filename')"; 
  
        // Execute query 
        mysqli_query($conn, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  }
  ?>
  <!-- bootstrap js -->
  <script src="js/bootstrap4.min.js"></script>
  </body>
</html>



