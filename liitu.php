<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Vanaematöö</title>
<link rel="stylesheet"
type="text/css" href="https://fonts.googleapis.com/css?family=Raleway" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
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
  <li style="float:left">Seniorship</li>
  </ul>
  
  <h1>Ma otsin</h1>
<p><a href="praktikat.html">Praktikat</a> <a href="praktikanti.html">Praktikanti</a></p>
</body>
</html>
