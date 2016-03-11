<?php

$servername = "localhost";
$username = "root";
$password = "root";
$slc = $_GET["select"];
if($slc == 1) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully<br>";
        //    $sql = "INSERT INTO table1 (id, item) VALUES (null, 'test')";
        //$sql = "UPDATE table1 SET item='potato' WHERE id=2";
        $sql = "UPDATE `TABLE 3` SET `" . $_GET["field"] . "`='' WHERE id=" . $_GET["id"];
        $stmt = $conn->prepare($sql);
        // $conn->exec($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        echo "records deleted successfully";
        
        /*foreach($stmt->fetchAll())
         as $k => $v) {
         echo $v;
         }*/
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} elseif($slc == 2) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully<br>";
        $sql = "INSERT INTO `TABLE 3` (ID,
 `First Name`,
 `Last Name`,
 `Superhero Alias`,
 `Day Job`,
 `Current Superhero Team`,
 `Main Villian`,
 Image
 ) VALUES (
 null,
 '" . $_GET["FN"] . "',
 '" . $_GET["LN"] . "',
 '" . $_GET["SA"] . "',
 '" . $_GET["DJ"] . "',
 '" . $_GET["ST"] . "',
 '" . $_GET["MN"] . "',
 '" . $_GET["IM"] . "')";
        //$sql = "UPDATE table1 SET item='potato' WHERE id=2";
        $stmt = $conn->prepare($sql);
        // $conn->exec($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        echo "records UPDATED successfully";
        
        /*foreach($stmt->fetchAll())
         as $k => $v) {
         echo $v;
         }*/
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} elseif($slc == 3) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully<br>";
        $sql = "UPDATE `TABLE 3` SET `" . $_GET["field"] . "`='" . $_GET["content"] . "' WHERE id=" . $_GET["id"];
        //$sql = "UPDATE table1 SET item='potato' WHERE id=2";
        $stmt = $conn->prepare($sql);
        // $conn->exec($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        echo "records created successfully";
        
        /*foreach($stmt->fetchAll())
         as $k => $v) {
         echo $v;
         }*/
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} elseif($slc == 4) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully<br>";
        //    $sql = "INSERT INTO table1 (id, item) VALUES (null, 'test')";
        //$sql = "UPDATE table1 SET item='potato' WHERE id=2";
        $sql = "SELECT * FROM `TABLE 3` WHERE  id=" . $_GET["id"];
        $stmt = $conn->prepare($sql);
        // $conn->exec($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach($stmt->fetchAll()as $k => $v) {
            echo "<table border=\"1\"  style=\" width : 100 % \">
        <tr>
            <td>id</td>
            <td>first name</td>		
            <td>last name</td>
            <td>superhero alias</td>
            <td>Day job</td>
            <td>Superhero Team</td>
            <td>main villan</td>
            <td>Image</td>
        </tr>
        <tr>
            <td>" . $v["ID"] . "</td>
            <td>" . $v["First Name"] . "</td>		
            <td>" . $v["Last Name"] . "</td>
            <td>" . $v["Superhero Alias"] . "</td>
            <td>" . $v["Day Job"] . "</td>
            <td>" . $v["Current Superhero Team"] . "</td>
            <td>" . $v["Main Villian"] . "</td>
            <td> <img src=\"" . $v["Image"] . "\"></td>
        </tr>
    </table>";
        }
        //echo "the content of item with id " . $_GET["id"] . " is " . $v["item"];
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} elseif($slc == 5) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully<br>";
        //    $sql = "INSERT INTO table1 (id, item) VALUES (null, 'test')";
        //$sql = "UPDATE table1 SET item='potato' WHERE id=2";
        $sql = "SELECT * FROM `TABLE 3` WHERE `First Name` LIKE '%" . $_GET["content"] . "%' OR `Last Name` LIKE '%" . $_GET["content"] . "%' OR `Last Name` LIKE '%" . $_GET["content"] . "%' OR `Superhero Alias` LIKE '%" . $_GET["content"] . "%' OR `Day Job` LIKE '%" . $_GET["content"] . "%' OR `Current Superhero Team` LIKE '%" . $_GET["content"] . "%'OR `Main VIllian` LIKE '%" . $_GET["content"] . "%'";
        $stmt = $conn->prepare($sql);
        // $conn->exec($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach($stmt->fetchAll()as $k => $v) {
            echo "<table border=\"1\"  style=\" width : 100 % \">
        <tr>
            <td>id</td>
            <td>first name</td>		
            <td>last name</td>
            <td>superhero alias</td>
            <td>Day job</td>
            <td>Superhero Team</td>
            <td>main villan</td>
            <td>Image</td>
        </tr>
        <tr>
            <td>" . $v["ID"] . "</td>
            <td>" . $v["First Name"] . "</td>		
            <td>" . $v["Last Name"] . "</td>
            <td>" . $v["Superhero Alias"] . "</td>
            <td>" . $v["Day Job"] . "</td>
            <td>" . $v["Current Superhero Team"] . "</td>
            <td>" . $v["Main Villian"] . "</td>
            <td> <img src=\"" . $v["Image"] . "\"></td>
        </tr>
    </table>";
        }
        //echo "the content of item with id " . $_GET["id"] . " is " . $v["item"];
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

?>
<br>
<a href="index.php">Go home</a>