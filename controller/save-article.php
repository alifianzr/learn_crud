<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$title = $_POST['title'];
		$description = $_POST['description'];
		$content = $_POST['content'];
        $posted_date = $_POST['posted_date'];
		
		// include database connection file
		include_once("../DB/config.php");
				
		// Insert user data into table
		$result = mysqli_query($connection, "INSERT INTO article(title,description,content,posted_date) 
        VALUES('$title','$description','$content','$posted_date')");
		
		// Show message when user added
		// echo "Article added successfully. <a href='../view/pages/articles.php'>View Article</a>";

		
		// Redirect to homepage to display updated user in list
		header("Location: ../view/pages/articles.php");
	}
?>