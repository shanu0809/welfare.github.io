<?php

    session_start();

	require '../connection.php';



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$title = dataFilter($_POST['blogTitle']);
		$content = $_POST['blogContent'];
		$username = $_POST['username'];
	}


    $sql = "INSERT INTO blogdata (blogUser, blogTitle, blogContent)
		    VALUES ('$username', '$title', '$content')";
    $result = mysqli_query($conn, $sql);

    if(!$result)
    {
echo "some error occurred";
    }
	else
	{
		header("Location: ../blogView.php");
	}

    function dataFilter($data)
    {
    	$data = trim($data);
     	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
      	return $data;
    }

?>
