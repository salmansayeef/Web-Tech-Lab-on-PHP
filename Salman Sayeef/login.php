<?php
echo "<p>Registration Successful</p>";
$usr=$_POST['un'];
$full=$_POST['fn'];
$mail=$_POST['em'];
$phone=$_POST['phn'];
$pass=$_POST['pw'];
$gen=$_POST['gender'];
$edu=$_POST['ed'];



echo "Username : ".$usr."<br>";
echo "Fullname : ".$full."<br>";
echo "Email : ".$mail."<br>";
echo "Phone : ".$phone."<br>";
echo "Password : ".$pass."<br>";
echo "Gender : ".$gen;
echo "<br/>";


if(isset($_POST['Submit'])){
	

    if(!empty($_POST['ed'])) {
		
		
		echo "Education : ".'<br/>'.'<ul>';
		
        foreach($_POST['ed'] as $value){
			
			
            echo "*".$value.'<br/>';
			
        }

    }

}

	echo "</list>";


?>