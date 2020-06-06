<?php
include_once('myDbConnector.php');
	$sql = "SELECT * FROM healthdeclarationsystem;";
	$records = mysqli_query($conn, $sql);
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



<table id = "forDisplayTable" >
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
while($row = mysqli_fetch_array($records)){
	echo "<tr>";
	echo "<td>".$row['lName']."</td>";
	echo "<td>".$row['fName']."</td>";
	echo "<td>".$row['mName']."</td>";
	echo "<td>".$row['travelOutsidePhil']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['phoneCode']."</td>";
	echo "<td>".$row['phone']."&nbsp&nbsp</td>";
	echo "<td><a href=drop.php?id=".$row['id']." class = del><img src = deleteImg.png id = delImg></a></td>";
}
?>

</table>


<img src = "botimg.png" id = "regBotImgRefix">


</body>
</html>