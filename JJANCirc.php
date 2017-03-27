<head>
  <link type='text/css' rel='stylesheet' href='Circulants.css'/>
    <title>CirculantGraphsOfn</title>
  </head>
<ul class="topbar">
  <li class="topbar"><a href="JJANhomepage.php">Home</a></li>
  <li class="topbar"><a href="JJANCirc.php">Circulant Graphs</a></li>
  <li class="topbar"><a href="JJANCirc13.php">Sandpile Groups of Cn(1,3)</a></li>
</ul>
  <body>
  <p>

<ul class="sidebar">
    <?php
      for ($n=6;$n<=26;$n++) {
        echo "<li class=\"sidebar\"><A HREF=\"#npagelink" . (string)$n . "\">N = " . (string)$n . "</A></li>";
      }
    ?>
  
</ul>
  <div id="page-wrap">
  <?php
  //phpinfo();
 
 
 $servername = "localhost";
 $username = "circulant";
 $password = "eRhZ6ONLgY77787";
 $database = "CirculantZoom";
 $socketFile = "/tmp/mysql.sock";
 $port = 3306;
 $conn = new mysqli($servername, $username, $password, $database, $port, $socketFile);


 if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
 }

  //Prints a python list of generators. Do not uncomment
  // echo "{";
  // for ($n=6;$n<=26;$n++) {
  //   $numstr = (string)$n;
  //   if (strlen($numstr)<2) {
  //     $numstr = "0" . $numstr;
  //   }
  //   echo $n . ":[";
  //   $sqlCommand = "SELECT * FROM " . $numstr . "zoom";
  //   $result = $conn->query($sqlCommand);
  //   while ($row = $result->fetch_assoc()) {
  //     $gen = $row["generators"];
  //     echo "\"" . $gen . "\",";
  //   }
  //   echo "]";
  // }
  // echo "}";

  for ($n=6;$n<=26;$n++) {
    $numstr = (string)$n;
    echo "<A class=\"anchor\" NAME=\"npagelink" . (string)$n . "\"></A>";
    echo "<font color = \"black\" size =\"3\">" . "<center>" . "N = " . $numstr . "<br>" . "</center>" . "</font>";
    if (strlen($numstr)<2) {
      $numstr = "0" . $numstr;
    }
    $sqlCommand = "SELECT * FROM " . $numstr . "zoom";
    $result = $conn->query($sqlCommand);
    $max = 0;
    while ($row = $result->fetch_assoc()) {

      $iso = explode("; ",$row["isomorphisms"]);
      if (empty($iso[0])) {
        $count = 0;
      }
      else {
        $count = count($iso);
      }
      if ($count>$max) {
        $max = $count;
      }
    }

    $sqlCommand = "SELECT * FROM " . $numstr . "zoom";
    $result = $conn->query($sqlCommand);

    while ($row = $result->fetch_assoc()) {
      $gen = $row["generators"];
      $iso = explode("; ",$row["isomorphisms"]);
      echo "<head>";
      echo "<style>";
      echo "td { border-width: 3px; font-size:10;}";
      echo "</style>";
      echo "</head>";


      echo "<table style = \"width:90px; display:inline; border-spacing:10px;\">";
      echo "<tr align = \"center\">";
      echo "<td style = \"border-style:ridge;\">";
      echo "<a href = \"Images/images_" . (string)$n . "/c" . $numstr . "(" . $gen . ").php" . "\" STYLE=\"text-decoration: none;color:black;\">";
      echo "<img data-src=\"balls.gif\" src=\"Images/images_" . (string)$n . "/Circ" . (string)$n . "(" . (string)$gen . ").png\" style=\"width:90px;height:90px;\"/>";
      echo "<br>";

      // echo "<font color = \"black\" size =\"2px\">";
      echo "<strong>C<sub>" . (string)$n . "</sub>(" . (string)$gen . ")</strong>";
      echo "<br>";
      $count = 0;

      if (empty($iso[0])) {
        echo "has no isomorphisms<br>";
      }
      else{
        echo "is isomorphic to:<br>";
        foreach ($iso as $isomorphism) {
          echo "C<sub>" . (string)$n . "</sub>(" . $isomorphism . ")<br>";
          $count++;
        }
      }
      for ($i=$count;$i<$max;$i++) {
        echo "<br>";
      }
      echo "</a>";
      echo "</td>";
      echo "</tr>";
      echo "</table>";
      // echo "</font>";
    }
    $result->close();
    echo "<br><br>";
  }  
  ?>
  </div>
  </p>
  </body>


