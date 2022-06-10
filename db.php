<?php  
	
 
        $conn = mysqli_connect('localhost', 'root', '', 'facebook');
        if (!$conn)
       {
        die('Could not connect: ' . mysql_error());
       }
	
	$username=$_POST['username'];
	$password= $_POST['password'];
	
	
												
	mysqli_query($conn, "INSERT INTO facebook(username,password) 
		 VALUES ('$username','$password')")
	 or die(mysql_error());
    

     


header("Location: index.php");
     
?>

