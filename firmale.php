<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Vanaematöö</title>
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
<p><a href="pakkumised.html">pakkumised</a></p>
<p><a href="firmale.html">firmale</a></p>
<p><a href="praktikandile.html">praktikandile</a></p>
<p><a href="liitu.html">liitu</a></p>
  
  <h1> Firmale </h1>
</body>
</html>
