<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Seniorship</title>
<link rel="stylesheet"
type="text/css" href="https://fonts.googleapis.com/css?family=Raleway" />
<link rel="stylesheet" type="text/css" href="style.css"></head>
<body>


  <?php
  // define variables and set to empty values
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <ul>
    <li style="background-color:#46cdc4"><a href="liitu.php">Liitu</a></li>
  <li><a href="praktikandile.php">Praktikandile</a></li>
  <li><a href="firmale.php">Firmale</a></li>
  <li><a href="index.php">Pakkumised</a></li>
  <li style="float:left"><a href="index.php"> <img src="logo.png" alt="Seniorship" style="height:100px;"></a></li>
  </ul>
  <h1> Firmale </h1>
</body>
</html>
