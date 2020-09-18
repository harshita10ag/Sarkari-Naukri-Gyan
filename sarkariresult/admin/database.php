<?php 
	$conn=mysqli_connect("localhost","root","","indiastudies");
	echo 1;
	if(!$conn)
	{
		die("unable to connect".mysqli_connect_error());
		}#end if
		?>