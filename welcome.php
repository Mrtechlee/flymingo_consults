<?php
if(isset($_POST['contact_btn'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $comment=$_POST['comment'];
  $to="flymingoconsults@gmail.com";
  $header="from:$email";
  if(mail($to,$subject,$comment,$header)){$comment1="Message submitted successfully";
  }
}

?>