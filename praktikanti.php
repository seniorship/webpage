
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Seniorship</title>
<link rel="stylesheet"
type="text/css" href="https://fonts.googleapis.com/css?family=Raleway" />
<link rel="stylesheet" type="text/css" href="style.css"> </head>
  <body>
    <?php
    // Based on examples from
    // http://www.w3schools.com/php
    // http://myphpform.com
    // http://stackoverflow.com/questions/7711466/checking-if-form-has-been-submitted-php
    // http://stackoverflow.com/questions/7266935/how-to-send-utf-8-email#7267251
    // Further interesting example
    // http://code.tutsplus.com/tutorials/how-to-implement-email-verification-for-new-members--net-3824

    // define variables and set to empty values

    $pealkiriErr = $tootasuErr = $praktikapikkusErr =  $telefoninumberErr =  $asukohtErr = "";
    $pealkiri = $tootasu = $praktikapikkus =  $telefoninumber =  $asukoht = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["pealkiri"])) {
        $pealkiriErr = "Pealkiri on vajalik";
      } else {
        $pealkiri = test_input($_POST["pealkiri"]);
      }
      if (empty($_POST["tootasu"])) {
             $tootasuErr = "tootasu on vajalik";
      } else {
             $tootasu = test_input($_POST["tootasu"]);
      }
      if (empty($_POST["praktikapikkus"])) {
                 $praktikapikkusErr = "Praktika pikkus on vajalik";
      } else {
                 $praktikapikkus = test_input($_POST["praktikapikkus"]);
      }
      if (empty($_POST["telefoninumber"])) {
          $telefoninumberErr = "Telefoninumber on vajalik";
      } else {
          $telefoninumber = test_input($_POST["telefoninumber"]);
      }
      if (empty($_POST["asukoht"])) {
          $asukohtErr = "Asukoht on vajalik";
      } else {
          $asukoht = test_input($_POST["asukoht"]);
      }
      if (empty($_POST["ametikohanimi"])) {
                $ametikohanimiErr = "Ametikoha nimi on vajalik";
            } else {
                $ametikohanimi = test_input($_POST["ametikohanimi"]);
            }
      if (empty($_POST["ajavahemikaastast"])) {
                      $ajavahemikaastastErr = "Ajavahemik aastast nimi on vajalik";
                  } else {
                      $ajavahemikaastast = test_input($_POST["ajavahemikaastast"]);
                  }
      if (empty($_POST["kuniaastani"])) {
                $kuniaastaniErr = "Kuni aastani nimi on vajalik";
              } else {
                $kuniaastani = test_input($_POST["kuniaastani"]);
             }
      if (empty($_POST["asukoht"])) {
               $asukohtErr = "Asukoht nimi on vajalik";
           } else {
              $asukoht = test_input($_POST["asukoht"]);
          }
       $muu = test_input($_POST["muu"]);
       $huvitavud = test_input($_POST["huvitavud"]);      
    }

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

</body>
</html>

<h1>Tere tulemast!</h1>
<p> Registreerumiseks täidke palun ära järgnevad väljad praktika kirjelduse, asukoha ja tasu kohta. </p>
<p>Väljade täitmine võtab umbes 10 minutit. <p>

<h2>Pakkumise kirjeldus</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Pealkiri:<input type="text" name="pealkiri" value="<?php echo $pealkiri;?>">
  <span class="error">* <?php echo $pealkiriErr;?></span>
  <br><br>
  Töötasu:<input type="text" name="tootasu" value="<?php echo $tootasu;?>">
  <span class="error">* <?php echo $tootasuErr;?></span>
  <br><br>
  Praktika pikkus:<input type="text" name="praktikapikkus" value="<?php echo $praktikapikkus;?>">
  <span class="error">* <?php echo $praktikapikkusErr;?></span>
  <br><br>
  Asukoht:<br>
  <select name="asukoht" size="15">
    <option value="Harjumaa">Harjumaa</option>
    <option value="Hiiumaa">Hiiumaa</option>
    <option value="Ida-Virumaa">Ida-Virumaa</option>
    <option value="Jõgevamaa">Jõgevamaa</option>
    <option value="Järvamaa">Järvamaa</option>
    <option value="Läänemaa">Läänemaa</option>
    <option value="Lääne-Virumaa">Lääne-Virumaa</option>
    <option value="Ida-Virumaa">Ida-Virumaa</option>
    <option value="Põlvamaa">Põlvamaa</option>
    <option value="Pärnumaa">Pärnumaa</option>
    <option value="Raplamaa">Raplamaa</option>
    <option value="Saaremaa">Saaremaa</option>
    <option value="Tartumaa">Tartumaa</option>
    <option value="Valgamaa">Valgamaa</option>
    <option value="Viljandimaa">Viljandimaa</option>
    <option value="Võrumaa">Võrumaa</option>
  </select>
</br>

  <input type="submit" name="formsubmit" value="Registreeru"/>

  </form>
  <?php
  echo "<h2>Teie panus:</h2>";
  echo $pealkiri;
  echo "<br>";
  echo $tootasu;
  echo "<br>";
  echo $praktikapikkus;
  echo "<br>";
  echo $asukoht;
  echo "<br>";
  ?>

</body>
</html>
