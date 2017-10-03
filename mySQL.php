<?php
    //Step 1
    $conn = mysqli_connect('localhost', 'zikmir', 'gforce', 'temp_database') or die('Error connecting to MySQL server.');
    $dbhost = "localhost";
    $dbuser = "zikmir";
    $dbpass = "gforce";
    $dbname = "temp_database";
    
	$page = $_SERVER['PHP_SELF'];
	$sec = "5";
	header("Refresh: $sec; url=$page");
?>

<html>
    <head>
    </head>
    <body>
        <h1>
            PHP connect to MySQL
        </h1>
		<?php
            //Step 2
            $sql = "SELECT id, time, temp FROM time_temp ORDER BY id DESC LIMIT 0,1";
			$result = $conn->query($sql) or die('Error querying database.');
           
            while ($row = $result->fetch_assoc()){
			echo "ID " . $row["id"]. " Time:" . $row["time"]. " Temp: " . $row["temp"]. "<br>";
			$conn->close(); 					}
       ?>
    </body>
</html>
			
