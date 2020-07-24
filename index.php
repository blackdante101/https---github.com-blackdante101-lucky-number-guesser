<!DOCTYPE html>
<html>
<head>
	<title>Lucky Numbers</title>
	<style type="text/css">
		*{
			font-family: century gothic;
		}
		body{
			background-image: url("img2.jpg");
		}
		.textcontainer{
			margin:7% auto;
			height: 300px;
			width: 750px;
            background-color:white;
            padding: 5%;
		}
		.textcontainer h1{
			color: #22a6b3;
		}
		.textcontainer input[type="text"]{
			width:500px;
			height:30px;
		}
		.textcontainer input[type="submit"]{
         height:35px;
         width:80px;
         background-color: #22a6b3;
         border: 1px solid #22a6b3;
         color: white;
         font-size: 17px;
		}
		.textcontainer form{
			padding: 6% 3%;
		}
		.textcontainer form p {
			text-align: center;
		}


	</style>
		
</head>
<body>
	
	<div class="textcontainer">
		<center><h1>Guess The Lucky Number For A Good Award!</h1></center>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="number_txt" onclick="">
		<input type="submit" name="submit">

	</form>	
	<?php
	
 if (isset($_POST['submit'])) {
	$number = 7;
	
$guess=$_POST['number_txt'];
if ($guess > $number) {
	echo "<p id='textb' style='color:red;'>the lucky number is lesser</p>";

}
elseif ($guess < $number) {

	echo "<p id='textb' style='color:red;'>the lucky number is greater</p>";
}
elseif ($number==$guess) {

	echo "<p id='textb' style='color:green;'>Congrats you got the lucky number</p> ";
}

 }
 ?>
	</div>
	



</body>
</html>