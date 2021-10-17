<?php
  $email = $_POST['email'];
  $username = $_POST['username'];
  $country = $_POST['country'];
  $subject = $_POST['subject'];
  //Database connection
  $conn = new mysqli('localhost','id17772007_developermastouri','','');
    if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into contact_for_working(email, username, country, subject) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $username, $country, $subject);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
  }


?> 
