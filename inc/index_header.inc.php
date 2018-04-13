<?php include("connect.inc.php"); 

session_start();

if(isset($_SESSION["email"]))
{
	$email = $_SESSION["email"];
}
else
{
	$email = "";
	header("Location: login.php");
}

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query);
$get = mysqli_fetch_assoc($result);
$name = $get["name"];

?>

<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<title>ML@Kgp</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		</div>
		<a class="nav-link">Hi <?php echo $name;?>!</a>
		<a href="logout.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button></a>

	</nav>
	<br><br><br>