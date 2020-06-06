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


<table id = "forDisplayTable">
<tr>
<th>Last Name</th>
<th>First Name</th>
<th>M.I</th>
<th>Travel Outside Philippines</th>
<th>Email</th>
<th>Phone Code</th>
<th>Phone</th>
</tr>
<?php
while($rows=mysqli_fetch_assoc($result))
{
?>	
	<tr>
		<td><?php echo $rows['lName'];?></td>
		<td><?php echo $rows['fName'];?></td>
		<td><?php echo $rows['mName'];?></td>
		<td><?php echo $rows['travelOutsidePhil'];?></td>
		<td><?php echo $rows['email'];?></td>
		<td><?php echo $rows['phoneCode'];?></td>
		<td><?php echo $rows['phone'];?></td>
	</tr>
<?php	
}
?>
</table>

<img src = "botimg.png" id = "regBotImgRefix">


</body>
</html>