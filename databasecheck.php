<html>
<head>
<link rel="stylesheet" type="text/css" href="./supportcss.css">
</head>
<body class="page">

<h3> If you're not in our database, you can sign up for newsletters and leave comments on our home page</h3><br>

<?php
$checkName = $_POST["checkName"];
$quote = implode(array("'",$checkName,"'"));

$servername = "localhost";
$username = "15mc44";
$password = "Enoo3nei";
$database = "db_15mc44";
$conn = new mysqli($servername, $username, $password, $database);
if(!$conn){
	die("Connection failed: " . $conn->connect_error);
}

$rows = $conn->query("SELECT * FROM contactInfo WHERE name LIKE $quote");
$result = $rows->fetch_row();
if($result[0] == $checkName){
	echo "Your name was found in our database. <br>You supplied the information: Name: $result[0], Phone: $result[2]";
}
else{
	echo "We did not find your infromation in our database <br>
	You can sign up for our newsletter on the home page";
}

?><br>
<a href="./assn2.php">Click here to go to the home page</a>


</body>
</html>