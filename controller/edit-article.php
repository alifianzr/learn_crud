<?php
// include database connection file
include_once("../DB/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $posted_date = $_POST['posted_date'];
		
	// update user data
	$result = mysqli_query($connection, "UPDATE article SET title='$title',description='$description',content='$content',posted_date='$posted_date' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: ../view/pages/articles.php");
}
?>