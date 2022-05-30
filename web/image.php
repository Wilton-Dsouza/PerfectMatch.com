<?php
$sth = $link->query($sql);

 $x=0;
while($row=mysqli_fetch_array($sth)){
   if($x%2==0){




     ?>

       <section id="features1">
         <?php
         echo "<font size='5' face='Verdana' color='white'>Name:" . $row['name'] ."<br />Bio:". $row['bio'] ."<br />Interests:". $row['interests'] ."<br />";
         echo '<img width=5% height=5% src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
         ?>
     </section>
     <?php


   }else{
     ?>

       <section id="features2">
         <?php




           echo "<font size='5' face='Verdana' color='red'>Name:" . $row['name'] ."<br />Bio:". $row['bio'] ."<br />Interests:". $row['interests'] ."<br /><br />";
           echo '<img width=5% height=5% src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';

           ?>
       </section>
       <?php



   }
   $x+=1;

 }
 ?>
