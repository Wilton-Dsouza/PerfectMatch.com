<div>
  while($row=mysqli_fetch_array($sth)){
     if($x%2==0){




       ?>

  <div class="row w-100 h-100">
    <div class="features1 col-lg-5 col-md-5 col-12">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <?php
        echo "<font size='5' face='Verdana' color='white'>Name:" . $row['name'] ."<br />Bio:". $row['bio'] ."<br />Interests:". $row['interests'] ."<br />";?>


      </div>
      </div>

    <div class="features2 col-lg-7 col-md-7 col-12">
      <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center pt-3" >
        <?php
        echo '<img width=5% height=5% src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
        ?>
   </div>
  </div>
</div>
