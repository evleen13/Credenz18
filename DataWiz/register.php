<?php

  $connection = mysqli_connect('localhost', 'root', '', 'dbname');
  if(!$connection){
    die("Connection failed");
  }

  function validate($data){
    $data = stripcslashes($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return $data;
  }

  $output = '';

  if(isset($_POST["submit"])){

    if(!empty($_POST["tid"])){
      $tid = validate($_POST["tid"]);
    }

    if(!empty($_POST["p1"])){
      $p1 = validate($_POST["p1"]);
    }

    if(!empty($_POST["email1"])){
      $email1 = validate($_POST["email1"]);
      if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
        $output .= "Invalid email1 format"; 
      }
    }

    if(!empty($_POST["p2"])){
      $p2 = validate($_POST["p2"]);
    }

    if(!empty($_POST["email2"])){
      $email2 = validate($_POST["email2"]);
      if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
        $output .= "Invalid email2 format"; 
      }
    }

    if(!empty($_POST["year"])){
      $year = $_POST["year"];
    }

    if(mysqli_query($connection, "INSERT INTO table_name (p1, email1, p2, email2, tid, year) values ('$p1', '$email1', '$p2', '$email2', '$tid', '$year')")){
      header("location: index.php?register=success");
    }

  }

?>