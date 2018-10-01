<?php



?>

<html>
<head>

<body>

<form name"" method="post" action="login.php">
Username:<input type="text" name="un"/>
<br><br>
Fullname:<input type="text" name="fn"/>
<br><br>
Email:<input type="text" name="em"/>
<br><br>
Phone:<input type="text" name="phn"/>
<br><br>
Password:<input type="password" name="pw"/>
<br><br>
Confirm Password:<input type="password" name="cpw"/>
<br><br>

Gender:
	<input type="radio" name="gt" value="Male"/>
	<input type="radio" name="gt" value="Female"/>
	<input type="radio" name="gt" value="Other"/>
<br><br>
	
Education:
	<input type="checkbox" name="ed" value="ss"/>SSC
	<input type="checkbox" name="ed" value="hs"/>HSC
	<input type="checkbox" name="ed" value="bs"/>BSC
	<input type="checkbox" name="ed" value="ms"/>MSC
<br><br>
<input type="submit" value="Submit"/>

</form>

</body>
</head>
</html>
