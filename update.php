<!DOCTYPE html>
<html>
<head>
	<title>WAD LECTURE</title>


	<?php

		$con = new mysqli("localhost","root","","wad");
		$q = "select * from mytable where id=".$_GET["id"];
		$rs = $con->query($q);
		$r = $rs->fetch_assoc();


		?>
</head>

<body>
	

	<form action="updateAction.php" method="POST">
		Enter Your Name
		<input type="text" name="name" placeholder="Enter your Name" value="<?php echo $r["name"];?>"> <br> <br>

		Enter Your Email
		<input type="text" name="email" placeholder="Enter your Email" value="<?php echo $r["email"];?>"> <br>
		<input type="hidden" name="id" value="<?php echo $r["id"];?>">

		<input type="submit" value="submit">
		<input type="reset" value="Clear">
	</form>

	


</body>
</html>