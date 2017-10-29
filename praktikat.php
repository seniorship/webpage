<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Seniorship</title>
</head>
<link rel="stylesheet"
type="text/css" href="https://fonts.googleapis.com/css?family=Raleway" />
<link rel="stylesheet" type="text/css" href="style.css">
 </head>
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

  $nimiErr = $elukohtErr = $linnkulaErr =  $telefoninumberErr = $valdkondErr = $ametikohanimiErr =  "";
  $ajavahemikaastastErr = $ajavahemikaastastErr = $kuniaastaniErr = $asukohtErr = "";
  $nimi = $elukoht = $linnkula =  $telefoninumber = $valdkond = $ametikohanimi =  "";
  $ajavahemikaastast = $ajavahemikaastast = $kuniaastani = $asukoht = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nimi"])) {
      $nimiErr = "Nimi on vajalik";
    } else {
      $nimi = test_input($_POST["nimi"]);
    }
    if (empty($_POST["elukoht"])) {
           $elukohtErr = "Elukoht on vajalik";
         } else {
           $elukoht = test_input($_POST["elukoht"]);
         }
    if (empty($_POST["linnkula"])) {
               $linnkulaErr = "Linn/Küla on vajalik";
             } else {
               $linnkula = test_input($_POST["linnkula"]);
             }
            if (empty($_POST["telefoninumber"])) {
                                       $telefoninumberErr = "Telefoninumber on vajalik";
                             } else {
                                       $telefoninumber = test_input($_POST["telefoninumber"]);
                             }

                                     if (empty($_POST["valdkond"])) {
                                               $valdkondErr = "Valdkond on vajalik";
                                     } else {
                                               $valdkond = test_input($_POST["valdkond"]);
                                     }

                                             if (empty($_POST["ametikohanimi"])) {
                                                       $ametikohanimiErr = "Ametikoha nimi on vajalik";
                                             } else {
                                                       $ametikohanimi = test_input($_POST["ametikohanimi"]);
                                             }

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

  <h1>Tere tulemast!</h1>
  <p> Registreerumiseks täidke palun ära järgnevad väljad enda kontaktinfo, töökogemuste ja hariduskäigu kohta. </p>
  <p>Hoiame Teie informatisooni täielikult konfidentsiaalsena ja jagame seda praktikapakkujaga ainult siis, kui Sa oma kandidatuuri ise esitad.
  </p>
  <p>Väljade täitmine võtab umbes 10 minutit.</p>
  <p><Et praktikapakkujale võimalikult head muljet jätta, möelge kõik vastused põhjalikult läbi.</p>
  <p> Vastamise lihtustamiseks on küsimuse kõrval hallis kirjas näide sobilikust vastusest.</p>

  <h2>Kontaktinfo</h2>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nimi: <input type="text" name="nimi" value="<?php echo $nimi;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Elukoht:<br>
    <select name="elukoht" size="15">
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
    <br><br>
    Linn/küla: <input type="text" name="linnkula" value="<?php echo $linnkula;?>">
    <span class="error">* <?php echo $linnkulaErr;?></span>
    <br><br>
    Telefoninumber: <input type="text" name="telefoninumber" value="<?php echo $telefoninumber;?>">
    <span class="error">* <?php echo $telefoninumberErr;?></span>
    <br><br>
    <h2>Töökogemus</h2>
    <p> Palun kirjeldage oma viimast töökogemust, et tööandjale enda kohta rohkem infot anda.</p>
     <select name="valdkond" size="25">
      <option value="Administratiivtöö">Administratiivtöö</option>
      <option value="Ehitus / Kinnisvara">Ehitus / Kinnisvara</option>
      <option value="Elektroonika / Side">Elektroonika / Side</option>
      <option value="Energeetika / Elekter">Energeetika / Elekter</option>
      <option value="Finants / Raamatupidamine">Finants / Raamatupidamine>
      <option value="Haridus / Teadus">Haridus / Teadus</option>
      <option value="IT / E-kaubandus">IT / E-kaubandus</option>
      <option value="Juhtimine">Juhtimine</option>
      <option value="Klienditeenindus">Klienditeenindus</option>
      <option value="Koolitus / Personalitöö">Koolitus / Personalitöö</option>
      <option value="Korrakaitse / Turva">Korrakaitse / Turva</option>
      <option value="Kultuur / Meelelahutus">Kultuur / Meelelahutus</option>
      <option value="Meedia">Meedia>
      <option value="Merendus">Merendus</option>
      <option value="Müük / Kaubandus">Müük / Kaubandus</option>
      <option value="Põllumajandus">Põllumajandus</option>
      <option value="Riigi- ja avalik haldus">Riigi- ja avalik haldus</option>
      <option value="Sotsiaaltöö">Sotsiaaltöö</option>
      <option value="Tehnika / Mehhaanika">Tehnika / Mehhaanika</option>
      <option value="Tervishoid">Tervishoid</option>
      <option value="Transport / Logistika">Transport / Logistika</option>
      <option value="Turism / Hotellindus">Turism / Hotellindus </option>
      <option value="Tööstus / Tootmine">Tööstus / Tootmine>
      <option value="Vabatahtlik töö">Vabatahtlik töö</option>
      <option value="Õigusteenused">Õigusteenused</option>
    </select>
    <br><br>
     Ametikoha nimi: <input type="text" name="ametikohanimi" value="<?php echo $ametikohanimi;?>">
     <span class="error">* <?php echo $ametikohanimiErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Registreeru">
  </form>

  <?php
  echo "<h2>Teie panus:</h2>";
  echo $nimi;
  echo "<br>";
  echo $elukoht;
  echo "<br>";
  echo $linnkula;
  echo "<br>";
  echo $telefoninumber;
  echo "<br>";
  echo $valdkond;
  echo "<br>";
  echo $ametikohanimi;
  echo "<br>";
  ?>

</body>
</html>
