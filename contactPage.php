<html>

<head>
		<title>Giftworks Boutique</title>
		<script src="./assn2.js"></script>
		<link rel="stylesheet" type="text/css" href="./supportcss.css">
		<meta charset="UTF-8">
		<meta name="author" content="Malcolm Celmainis"/>
	</head>
<body>
<?php
//Save inputs from contact form

$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$comments=$_POST["comments"];
$phoneFormat = explode("-",$_POST["phone"]);
$phone=implode("",$phoneFormat);
if($_POST["newsletter"] == TRUE){
	$newsletter = 1;
}else{$newsletter = 0;
}
$commentLength = strlen($comments)
?>

<h1> Thank you, <?php print $name;?> your input is very important to us.</h1>
<h3> We will review your infromation and respond to you as soon as we can!</h3>
<a href="./assn2.php" alt="home page">Return to home page</a>

<?php
//insert data into contact info table
$servername = "localhost";
$username = "15mc44";
$password = "Enoo3nei";
$database = "db_15mc44";
$conn = new mysqli($servername, $username, $password, $database);
if(!$conn){
	die("Connection failed: " . $conn->connect_error);
}

$name1 = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn,$email);
$newsletter1 = mysqli_real_escape_string($conn,$newsletter);
$gender1 = mysqli_real_escape_string($conn,$gender);
$comments1 = mysqli_real_escape_string($conn,$comments);
$phone1 = mysqli_real_escape_string($conn,$phone);

$stmt = $conn->prepare("INSERT INTO contactInfo (name, email, phone, newsletter, gender) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiis", $name1, $email1, $phone1, $newsletter1, $gender1);

$stmt->execute();
$stmt->close();

//insert data into comment table
if($commentLength>0){
$stmt2 = $conn->prepare("INSERT INTO commentTable (name, phone, comments) VALUES (?, ?, ?)");
$stmt2->bind_param("sis", $name1, $phone1, $comments1);
$stmt2->execute();

$stmt2->close();
}
$conn->close();
?>
<h5>Your information has been added to our database</h5>


</body>
</html>