<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("../DB/config.php");
				
		// Insert user data into table
		$result = mysqli_query($connection, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		// echo "User added successfully. <a href='../view/pages/users.php'>View Users</a>";

		
		// Redirect to homepage to display updated user in list
		header("Location: ../view/pages/users.php");
	}
	?>