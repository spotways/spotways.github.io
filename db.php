<?php

	
	$con = mysqli_connect ( 'localhost', 'root', 'root', 'project' );
	if (! $con) {
		die ( 'Could not connect: ' . mysqli_error ( $con ) ) . "<br>";
	}
	
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['inputEmployee'];
$d=$_POST['bussiness'];
$e=$_POST['indtype'];
$f=$_POST['inputAddress'];
$g=$_POST['phone'];
$h=$_POST['country'];
$i=$_POST['query'];

$sql="INSERT INTO contact(name,email,inputEmployee,bussiness,indtype,inputAddress,phone,country,query) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')";

if (mysqli_query($con, $sql)) {
    echo " Your Responce has been Recoded. we will contact you soon";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
	

?>