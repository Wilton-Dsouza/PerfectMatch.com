<?php
// Include config file
include "config.php";

$name = $bio = $interests = "";


if(isset($_POST['submit'])){



    $name = $_POST["name"];
    $bio = $_POST["bio"];
    $interests =$_POST["interests"];
    $mafile=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));


    $myqueryboi = "INSERT INTO subscribe VALUES ('$name','$bio','$interests','$mafile')";
    $execqury=mysqli_query($link,$myqueryboi);

    if($execqury){

                header("location: index.html");
            } else{
                echo "Something went wrong. Please try again later.";
            }

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscribe</title>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/a2f85f9251.js" crossorigin="anonymous"></script>

    <!-- Googlefonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Russo+One&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    body {

      background-image: url('cool.jpg');


}
.login-form {
width: 340px;
  margin: 10px auto;
}
.login-form form {
  margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;

}
.btn {
    font-size: 15px;
    font-weight: bold;
    background: #ff4646;
}
.btn:hover{
  background: #ff847c;
}
/* navigation bar */
.navbar{
  padding: 1.5rem 42% 3.2rem;
}

.navbar-brand{
  font-family: 'Pirata One', cursive;
  font-size: 4.2rem;
  font-weight: bold;
}

.navbar-dark .navbar-brand {
  /* -webkit-text-stroke: 1px #f58634; */
  text-shadow: 2px 2px 4px black;
    color: #ffcc29;
}
    </style>
</head>
<body>
  <nav class="navbar  navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="">Swayamvar<i class="fas fa-fire"></i></a>
  </nav>

    <div class="login-form">
        <h2>Subscribe</h2>
        <p>Please fill this form to create an account.</p>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group ">
                <label>Name</label>
                <input type="text" name="name" class="form-control" >

            </div>
            <div class="form-group ">
                <label>Bio</label>
                <input type="text" name="bio" class="form-control" >

            </div>
            <div class="form-group ">
                <label>Interests</label>
                <input type="text" name="interests" class="form-control">

            </div>
            <div class="form-group">
              <label>Profile Pic</label>
              <input type="file" name="image" id="image" class="form-control">
            </div>



            <div class="form-group">
                <input onclick="myalert()" type="submit" class="btn btn-primary" name="submit">
                <input type="reset" class="btn btn-primary" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>
<script>
function myalert(){
  alert("Subscription Successful");
}
</script>
