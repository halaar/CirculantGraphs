<body>
	<p>
			<style>
			ul.topbar {
			    list-style-type: none;
			    margin: 0;
			    padding: 0;
			    width: 100%;
			    overflow: hidden;
			    background-color: #333;
			    position: fixed; /* Make it stick, even on scroll */
			    top:0;
			    left:0;
			    overflow: auto;
			    z-index:1000
			}

			li.topbar {
			    float: left;
			}

			li.topbar a {
			    display: block;
			    color: white;
			    text-align: center;
			    padding: 14px 16px;
			    text-decoration: none;
			}

			/* Change the link color to #111 (black) on hover */
			li.topbar a:hover {
			    background-color: #111;
			}
			#page-wrap { 
			  position: relative;
			  margin-top: 55;
			}
			</style>
			  <ul class="topbar">
			  <li class="topbar"><a href="../../JJANhomepage.php">Home</a></li>
			  <li class="topbar"><a href="../../JJANCirc.php">Circulant Graphs</a></li>
			  <li class="topbar"><a href="../../JJANCirc13.php">Sandpile Groups of Cn(1,3)</a></li>
			</ul>
		<div id="page-wrap">
		<?php
			$n=25;
			$gens="1, 2, 3, 4, 5, 6, 9, 10, 11";
			$servername = "localhost";
  			$username = "circulant";
  			$password = "eRhZ6ONLgY77787";
  			$database = "CirculantZoom";
  			$socketFile = "/tmp/mysql.sock";
			$numstr = (string)$n;
			if (strlen($numstr)<2) {
				$numstr = "0" . $numstr;
			}
			$port = 3306;
			$conn = new mysqli($servername, $username, $password, $database, $port, $socketFile);
			if ($conn->connect_error) {
				die("Connection failed:" . $conn->connect_error);
			}
			$sqlCommand = "SELECT * FROM " . $numstr . "zoom WHERE generators = \"" . $gens . "\"";
			$result = $conn->query($sqlCommand);
			$row = $result->fetch_assoc();
			$gen = $row["generators"];
			$iso = explode("; ",$row["isomorphisms"]);
			$invs = explode(", ",$row["invariant_factors"]);
			echo "<img src=\"Circ" . (string)$n . "(" . $gens . ").png\" align=\"left\" style=\"width:250px;height:250px;\"/>";
			echo "<strong>C<sub>" . (string)$n . "</sub>(" . (string)$gens . ")</strong>";
			if (empty($iso[0])) {
        		echo " has no isomorphisms";
      		} else {
				foreach ($iso as $isomorphism) {
					echo " &#8773 " . "C<sub>" . (string)$n . "</sub>(" . (string)$isomorphism . ")";
				}
			}
			echo "<br><br>";
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
			echo "<br><br>";
			echo "Invariant factors: " . $row["invariant_factors"];
			echo "<br><br>";
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
			echo "<br><br>";
			echo "Order: " . $row["orders"];
		?></div>
	</p>
</body>