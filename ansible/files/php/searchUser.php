<!doctype html>
<html>
<head>
        <title>Users </title>
        <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #484848;
}
.topnav {
  overflow: hidden;
  background-color:rgba(44, 130, 201, 1);
  height: 70px;
  border: 3px solid #3333ff
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 35px;
  font-weight: bold;
}

.topnav-right {
  float: right;
}
fieldset { 
	background: #FAFAFA;
	padding: 10px;
   margin:auto;
   max-width:450px;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid  rgba(44, 130, 201, 1);


}

table td{
  color: #ffffff;
}

table th{
  color: #ffffff;
  font-weight: bold;
}



 </style>
</head>
<body>
<div class="topnav">
            <a href="index.php">User inventory</a>
          </div>

<form>
    <button type="submit" formaction="index.php" style="margin:15px;height: 30px;width: 100px;cursor:pointer;border-radius:15px;
border: 3px solid #3333ff;background-color:rgba(44, 130, 201, 1);color:#f2f2f2;font-size:17px;">Back</button>
</form>  
<form method="post" action="searchUser.php">  
<fieldset>
   <input type="text" name="city" placeholder="City"  style="width:100%;height:30px;
   border: 2px solid  rgba(44, 130, 201, 1); border-radius:3px;  background:transparent;">
  <br><br>
  <input type="submit" name="submit" value="search" style="width:100%;height:30px;
   border: 2px solid  rgba(44, 130, 201, 1); border-radius:3px; cursor:pointer;background-color:rgba(44, 130, 201, 1)">&ensp; 
  </fieldset> 
</form> 
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
 // define variables and set to empty values
$servername = "localhost";
$username = "user_manager";
$password = "Qwerty123";
$dbname = "user_inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$city = $_POST["city"];


$sql = "SELECT * FROM users WHERE city = '$city'";
$var=mysqli_query($conn,$sql);
echo "<table border size=10 color=white font_color=white>";
echo "<tr>
<th>User Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>City</th>
<th>Country</th>
</tr>";
if(mysqli_num_rows($var)>0){
    while($arr=mysqli_fetch_row($var))
    { echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    <td>$arr[2]</td>
    <td>$arr[3]</td>
    <td>$arr[4]</td>
    <td>$arr[5]</td>
    </tr>";}
    echo "</table>";
    mysqli_free_result($var);
} else {
    echo "<p style='color:white;font-weight:bold'>No Results Found!</p>";
}

$conn->close();
}

?>
