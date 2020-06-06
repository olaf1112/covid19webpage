<?php
include_once('myDbConnector.php');
	$sql = "SELECT * FROM nCovDb;";
	$result = mysqli_query($conn, $sql);
?>


<html>
<head>
<link rel = "stylesheet" href = "style.css"/>
<title></title>
</head>
<body>



<div id = "divMenu"><br>
<b><a href = "index.php" class = "aMenu">GOVPH</a></b>
<a href = "index.php" class = "aMenu">HOME</a>
<a href = "m2.php" class = "aMenu">REGISTRATION</a>
<a href = "m3.php" class = "aMenu">VIEW RECORDS</a>
<a href = "m4.php" class = "aMenu">DROP RECORDS</a>
<a href = "Update.php" class = "aMenu">UPDATE RECORDS</a>
</div>
<div id = "divLeft">
</div>
<div id = "divRight">
</div>
<img src = "contact.jpg" id = "contactImg">





<div id = "title">
<hr class = "line">
<h1>UPDATE RECORDS</h1>
<hr class = "line">
<div>


<form action = "insert.php" method = "POST">
  <table id = "regForm" >
     <tr>
   <td>ID : </td>
   <td><input type = "text" name = "id" required></td>
  </tr>
  <tr>
   <td>Last Name : </td>
   <td><input type = "text" name = "ln" required></td>
  </tr>
  <tr>
   <td>First Name : </td>
   <td><input type = "text" name = "fn" required></td>
  </tr>
  <tr>
   <td>Middle Name : </td>
   <td><input type = "text" name = "mn" required></td>
  </tr>
   <tr>
   <td rowspan = 2>Travel Outside the Philippines? : </td>
   <td><input  type = "radio" name = "yn" value = "y" required>Yes</td>
   </tr>
   <tr>
   <td><input type = "radio" name = "yn" value = "n" required>No</td>
  </tr>
  <tr>
   <td>Email : </td>
   <td><input type = "email" name = "email" required></td>
   </tr>
   <tr>
   <td rowspan = 2>Phone # : </td>
   <td>
		<select name = "phoneCode" required>
		<option selected hidden value = "">Select Code</option>
		<option value="977">977</option>
		<option value="978">978</option>
		<option value="979">979</option>
		<option value="978">974</option>
		<option value="934">934</option>
		<option value="916">916</option>
		</select>
		</td>
		</tr>
		<tr>
		<td>
   <input type = "phone" name = "phone" placeholder = "Phone#" required>
   </td>
   </tr>
   <tr>
   <td colspan = 2><input id = "submit" name = "update" type = "submit" value = "UPDATE DATA"></td>
   </tr>
   </table>
  </form>

<img src = "botimg.png" id = "regBotImg">

</body>

</html>

