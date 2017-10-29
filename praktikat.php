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
  <ul>
    <li style="background-color:#46cdc4"><a href="liitu.php">Liitu</a></li>
  <li><a href="praktikandile.php">Praktikandile</a></li>
  <li><a href="firmale.php">Firmale</a></li>
  <li><a href="index.php">Pakkumised</a></li>
  <li style="float:left"><a href="index.php"> <img src="logo.png" alt="Seniorship" style="height:100px;"></a></li>
  </ul>

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

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["elukoht"])) {
        $elukohtErr = "Elukoht on vajalik";
      } else {
        $elukoht = test_input($_POST["elukoht"]);
      }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["linnkula"])) {
            $linnkulaErr = "Linn/Küla on vajalik";
          } else {
            $linnkula = test_input($_POST["linnkula"]);
          }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["linnkula"])) {
                    $linnkulaErr = "Linn/Küla on vajalik";
          } else {
                    $linnkula = test_input($_POST["linnkula"]);
          }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (empty($_POST["telefoninumber"])) {
                            $telefoninumberErr = "Telefoninumber on vajalik";
                  } else {
                            $telefoninumber = test_input($_POST["telefoninumber"]);
                  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          if (empty($_POST["valdkond"])) {
                                    $valdkondErr = "Valdkond on vajalik";
                          } else {
                                    $valdkond = test_input($_POST["valdkond"]);
                          }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                  if (empty($_POST["ametikohanimi"])) {
                                            $ametikohanimiErr = "Ametikoha nimi on vajalik";
                                  } else {
                                            $ametikohanimi = test_input($_POST["ametikohanimi"]);
                                  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ajavahemikaastast"])) {
            $ajavahemikaastastErr = "Ajavahemik aastast on vajalik";
  } else {
            $ajavahemikaastast = test_input($_POST["ajavahemikaastast"]);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kuniaastani"])) {
              $kuniaastaniErr = "Kuni aastani on vajalik";
    } else {
              $kuniaastani = test_input($_POST["kuniaastani"]);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["asukoht"])) {
                $asukohtErr = "Asukoht on vajalik";
      } else {
                $asukoht = test_input($_POST["asukoht"]);
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>

<h1>Tere tulemast!</h1>
<p> Registreerumiseks täidke palun ära järgnevad väljad enda kontaktinfo, töökogemuste ja hariduskäigu kohta. </p>
<p>Hoiame Teie informatisooni täielikult konfidentsiaalsena ja jagame seda praktikapakkujaga ainult siis, kui Sa oma kandidatuuri ise esitad.
</p>
<p>Väljade täitmine võtab umbes 10 minutit. <p><Et praktikapakkujale võimalikult head muljet jätta, möelge kõik vastused põhjalikult läbi.</p><p> Vastamise lihtustamiseks on küsimuse kõrval hallis kirjas näide sobilikust vastusest.</p>

<h2>Kontaktinfo</h2>
<form action="/action_page.php">
  Nimi:<br>
  <input type="text" name="nimi">
  <br>
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
  <br>
   Linn/küla:<br>
  <input type="text" name="linnkula">
  <br>
   Telefoninumber:<br>
  <input type="text" name="telefoninumber">
  <br>
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
  <br>
   Ametikoha nimi:<br>
  <input type="text" name="ametikohanimi">
<br>
   Ajavahemik aastast:<br>
  <input type="text" name="ajavahemikaastast"><br>
  Kuni aastani:<br>
  <input type="text" name="kuniaastani"> <br>
  Asukoht:<br>
  <input type="text" name="asukoht">
<br>
<h2>Kirjutage endast lähemalt</h2>
<p> Tutvustage end lühidalt. Võite kirjutada oma elukäigust, kogemustest, hobidest, tugevustest ja nõrkustest, eesmärkidest. </p>
 <input type="text">
<br>
<p> Missugusest praktikast olete huvitatud? </p>
 <input type="text">
</br>
  <input type="submit" name="formsubmit" value="Registreeru"/>
  </form>

  <script>
   document.getElementById("kontakt").onsubmit = function()
   {myFunction()};
  </script>

  <?php
  // Check for submission of entered data
  if (isset($_POST['formsubmit'])){
    // Give user feedback
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
       echo $comment;
       echo "<br>";
       echo "On esitatud, siis peaks saama kinnituse 1 tööpäeva jooksul";
       echo "<br>";
       echo "Был представлен, вы должны получить подтверждение в течение 1 рабочего дня";
       echo "<br>";
       echo "Has been submitted, you should receive an acknowledgement within 1 working day";
       echo "<br>";
     }
    }
    ?>

  // <?php
  // // create table if needed
  //  $servername = "localhost";
  //  $username = "dbuser";
  //  $password = "dbpasswd";
  //  $dbname = "praktikant";
  // try {
  //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //     // set the PDO error mode to exception
  //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //     echo "Connected successfully <br>";
  //     $conn = null;
  //     }
  // catch(PDOException $e)
  //     {
  //     echo "Connection failed: " . $e->getMessage();
  //     }
  // // Create table
  // try {
  //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //     // set the PDO error mode to exception
  //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //     // sql to create table of interns
  //     $sql = "CREATE TABLE IF NOT EXISTS interns (
  //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //     name VARCHAR(30) NOT NULL,
  //     elukoht VARCHAR(30) NOT NULL,
  //     linn VARCHAR(30) NOT NULL,
  //     telefoninumber INT(30) NOT NULL,
  //     valkond VARCHAR(5000) NOT NULL,
  //     ametikoha VARCHAR(30) NOT NULL,
  //     ajavahemik VARCHAR(30) NOT NULL,
  //     kuniaastani VARCHAR(30) NOT NULL,
  //     asukoht VARCHAR(30) NOT NULL,
  //     message VARCHAR(500) NOT NULL,
  //     comment VARCHAR(500) NOT NULL,
  //     reg_date TIMESTAMP
  //     )";
  //     // use exec() because no results are returned
  //     $conn->exec($sql);
  //     echo "intern table created <br>";
  //     $sql = $conn->prepare("INSERT INTO interns (name) VALUES ( '" . $name . "')");
  //     $sql->execute();
  //     $id = $conn->lastInsertId();
  //     echo "Username entered in table successfully and user id is " $id "". "<br>";
  //     $conn = null;
  //     // return to main page
  //     //header("Location:http://ip.address/index.php");
  //     }
  // catch(PDOException $e)
  //     {
  //     echo $sql . "<br>" . $e->getMessage();
  //     }
  // }
  // ?>

</body>
</html>
