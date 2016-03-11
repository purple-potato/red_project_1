<?php

if($_GET["thing"] == "1") {
    ?>
    <form action="action1.php">
  ID of what you want to delete:<br>
  <input type="text" name="id"><br>
  what field? <br>
  <input type="text" name="field"><br>
  Are You Sure I Want To Delete This?<br>
  <input type="radio" name="select" value="1">"I Am Sure"<br>
  <input type="submit" value="Submit">
</form>
<?php  
} 
elseif($_GET["thing"] == "2") {
    ?>
    <form action="action1.php">
  give us some info:<br>
  First name:<br>
  <input type="text" name="FN"><br>
  Last name:<br>
  <input type="text" name="LN"><br>
  Superherlo alias:<br>
  <input type="text" name="SA"><br>
  Day Job:<br>
  <input type="text" name="DJ"><br>
  Current SUperhero Team:<br>
  <input type="text" name="ST"><br>
  Main Villian:<br>
  <input type="text" name="MN"><br>
  Image:<br>
  <input type="text" name="IM"><br>
  are you sure you want to do this?<br>
  <input type="radio" name= "select" value="2"> "I Am Sure"<br>
  <input type="submit" value="Submit">
</form>
<?php
} 
elseif($_GET["thing"] == "3") {
    ?>
     <form action="action1.php">
  id of that which you want to edit:<br>
  <input type="text" name="id"><br>
  what would you like it to be?:<br>
  <input type="text" name="content"><br>
  what field?<br>
  <input type="text" name="field"><br>
  are you sure you want to do this?<br>
  <input type="radio" name= "select" value="3"> "I Am Sure"<br>
  <input type="submit" value="Submit">
</form>
<?php
} 
elseif($_GET["thing"] == "4") {
    ?>
    <form action="action1.php">
  ID of what you want to view:<br>
  <input type="text" name="id"><br>
  Are You Sure I Want To view This?<br>
  <input type="radio" name="select" value="4">"I Am Sure"<br>
  <input type="submit" value="Submit">
</form>
</form>
<?php
} 
elseif($_GET["thing"] == "5") {

?>
    <form action="action1.php">
  what do you want to seach for?<br>
  <input type="text" name="content"><br>
  Are You Sure I Want To search for This?<br>
  <input type="radio" name="select" value="5">"I Am Sure"<br>
  <input type="submit" value="Submit">
</form>
<?php
}
else{
    echo "first you have to select something, sorry...";
    }

?>
<br>
<a href="index.php">Go home</a>
