<?php

define("XSIZE", 5);
define("YSIZE", 5);
for($i = 0;
$i < (XSIZE * YSIZE );
$i ++ ) {
    if(!($i % XSIZE)&& $i)
        echo "<br>";
    $c = rand(0, 1)? "╱" : "╲";
    echo $c;
}

?>
<?php
/*
$servername = "localhost";
$username = "root";
$password = "root";
try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    //    $sql = "INSERT INTO table1 (id, item) VALUES (null, 'test')";
    //$sql = "UPDATE table1 SET item='potato' WHERE id=2";
    $sql = "UPDATE table1 SET item='hello' WHERE id=2";
    $stmt = $conn->prepare($sql);
    // $conn->exec($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo $stmt->rowCount(). " records UPDATED successfully";
    
    /*foreach($stmt->fetchAll())
     as $k => $v) {
     echo $v;
     }
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
*/
/*
 $user = 'root';
 $password = 'root';
 $db = 'mydb';
 $host = 'localhost';
 $port = 8889;
 $link = mysqli_init();
 $success = mysqli_real_connect($link, $host, $user, $password, $db, $port);
 if($success) {
 echo "<br>Conected to SQL server<br>";
 } else {
 echo "<br>connection to SQL server failed<br>";
 }
 //$sql = "INSERT INTO table1 (' id ', ' item ') VALUES (NULL, 'hi')";
 $sql = "SELECT * FROM table1";
 print_r($link->query($sql));
 if ($link->query($sql) === TRUE) {
 echo "New record created successfully";
 } else {
 echo "Error: " . $sql . "<br>" . $link->error;
 }
 //*/

?>
<script src="script.js"></script>
<script src="jquery.js"></script>
<br>
<div class="demo-container">
  <p></p>
</div>
<p id="demo"></p>
<button onclick="uno()">Click me</button>
<br>
<INPUT TYPE="button" onClick="history.go(0)" VALUE="Refresh">
<form action="selection.php" method="get">
  <input type="radio" name="thing" value="1">delete<br>
  <input type="radio" name="thing" value="2">create<br>
  <input type="radio" name="thing" value="3">update<br>
  <input type="radio" name="thing" value="4">read<br>
  <input type="radio" name="thing" value="5">search<br>
  <input type="submit" value="Submit">
</form>