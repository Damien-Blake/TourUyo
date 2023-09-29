<?php
 $con=mysqli_connect('localhost', 'root', '' , 'tour');

   
   $firstname = $_POST['firstname'];
   $other_name= $_POST['othername'];
   $email= $_POST['email'];
   $phone_number = $_POST['phone'];
   $access= $_POST['access'];
   $confirm= $_POST ['confirm'];

   

  $sql="INSERT INTO  torism(firstname, other_name, email,phone_number, access, comfirm) VALUES ('$firstname','$other_name','$email','$phone_number','$access', '$confirm')";   
  $done = mysqli_query($con , $sql);
  


?> 