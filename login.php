<?php 
  
  if (isset($_POST['email'] ) and isset($_POST['password']))
  {
   $email = $_POST['email'];
   $password = $_POST['password'];
   $pepper = 'FREQ2021';
   if($email == "siema")
   {
      echo "dobre";
   }
   else
   {
      echo "zle";
   }
  }
?>