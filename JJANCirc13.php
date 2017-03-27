<head>
  <link type='text/css' rel='stylesheet' href='Circulants.css'/>
  <title>CirculantGraphs</title>
</head>
<ul class="topbar">
  <li class="topbar"><a href="JJANhomepage.php">Home</a></li>
  <li class="topbar"><a href="JJANCirc.php">Circulant Graphs</a></li>
  <li class="topbar"><a href="JJANCirc13.php">Sandpile Groups of Cn(1,3)</a></li>
</ul>
<ul class="sidebar">
    <?php
	    for ($n=2;$n<=5;$n++) {
	      echo "<li class=\"sidebar\"><A HREF=\"JJANCirc13_" . (string)$n . ".php\">" . (string)$n . " Invariant Factors </A></li>";
	    }
	    echo "<li class=\"sidebar\"><A HREF=\"JJANCirc13.php\">Clear</A></li>";
    ?>
</ul>
<div id="page-wrap">
<?php
  //phpinfo();
  $invFactors=0;
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
  $sqlCommand = "SELECT * FROM zoomCN13";
  $result = $conn->query($sqlCommand);
  $max = 0;
  while ($row = $result->fetch_assoc()) {
  	$n = $row["n"];
  	$gens = "1, 3";
	$invs = explode(", ",$row["invariant_factors"]);
	if (count($invs)==$invFactors) {
		echo "<FONT COLOR=#00802b>";
	}
	echo "S(C<sub>" . (string)$n . "</sub>(" . (string)$gens . ")) &#8773 ";
	$first = true;
	foreach ($invs as $inv) {
		if ($first==false) {
			echo " &#215 &#8484<sub>" . $inv . "</sub>";
		}
		else {
			echo "&#8484<sub>" . $inv . "</sub>";
		}
		$first = false;
	}
	echo "<br>";
	echo "Invariant factors: " . $row["invariant_factors"];
	echo "<br>";
	$str = str_replace("*","&#183",$row["invariant_factors_factored"]);
	$strlen = strlen( $str );
	$inexp=false;
	$newstr= "";
	for( $i = 0; $i <= $strlen; $i++ ) {
   		$char = substr( $str, $i, 1 );
   		if ($char=="^") {
   			$inexp=true;
   			$newstr=$newstr . "<sup>";
   		}
   		else {
   			if ($inexp) {
   				if ($char==" " or $char==",") {
   					$newstr=$newstr . "</sup>";
   					$newstr=$newstr . $char;
   					$inexp=false;
   				}
   				else {
   					$newstr=$newstr . $char;
   				}
   			}
   			else {
   				$newstr=$newstr . $char;
   			}
   		}
	    // $char contains the current character, so do your processing here
	}
	if ($inexp) {
		$newstr=$newstr . "</sup>";
	}
	echo "Invariant factors factored: " . $newstr;

	if (count($invs)==$invFactors) {
		echo "</FONT>";
	}
	echo "<br><br><br>";
  }
?>
</div>
</body>
