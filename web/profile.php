<?php
require_once "config.php";

// Attempt select query execution
$sql = "SELECT * FROM subscribe";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <style type="text/css">
  body {

background: #fff;

}
#features1{
  padding: 7% 15%;
  background-color:#ff4646;
  position: relative;
}
#features2{
  padding: 7% 15%;
  background-color:#fff;
  position: relative;
}

</style>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Russo+One&family=Ubuntu&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">
<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- CSS -->
<link rel="stylesheet" href="css/styles.css">

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/a2f85f9251.js" crossorigin="anonymous"></script>

<!-- jQuery and script -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">


    <?php
    $sth = $link->query($sql);

     $x=0;
    while($row=mysqli_fetch_array($sth)){
       if($x%2==0){




         ?>

           <section id="features1">
             <?php
             echo '<center>

             <img width=20% height=30% src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/><br /></center>';
             echo "<center>

             <font size='5' face='Verdana' color='white'>Name:" . $row['name'] ."<br />Bio:". $row['bio'] ."<br />Interests:". $row['interests'] ."</center><br />";

             ?>
         </section>
         <?php


       }else{
         ?>

           <section id="features2">
             <?php



               echo '<center>

               <img width=20% height=30% src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/><br />';
               echo "<font size='5' face='Verdana' color='red'>Name:" . $row['name'] ."<br />Bio:". $row['bio'] ."<br />Interests:". $row['interests'] ."</center><br /><br />";


               ?>
           </section>
           <?php



       }
       $x+=1;

     }
     ?>

</form>
</body>
</html>
