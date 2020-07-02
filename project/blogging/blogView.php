<?php
	session_start();

	require 'connection.php';


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if(isset($_POST['comment']) AND $_POST['comment'] != "")
		{
			$sql = "SELECT * FROM blogdata ORDER BY blogId DESC";
			$result = mysqli_query($conn, $sql);

			while($row = $result->fetch_array())
			{$blogId=$row['blogId'];
				$check ='submit'.$blogId;
				if(isset($_POST[$check]))
				{
					$blogId = $row['blogId'];
					break;
	 			}
			}

			$comment = dataFilter($_POST['comment']);
		$user= $_POST['user'];
				$commentUser = $user;
				if($commentUser=='Admin'||$commentUser=='admin'){
					$pic = "emblem.jpg";
				}
				else{
						$pic = "profile0.png";
				}
			
			
			if(isset($blogId))
			{
				$sql = "INSERT INTO blogfeedback (blogId, comment, commentUser, commentPic)
						VALUES ('$blogId' ,'$comment', '$commentUser', '$pic');";
				$result = mysqli_query($conn, $sql);
			}
		}
	}

	function dataFilter($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$sql = "SELECT * FROM blogdata ORDER BY blogId DESC";
	$result = mysqli_query($conn, $sql);

	function formatDate($date)
	{
		return date('g:i a', strtotime($date));
	}

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Blogging</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />
		<link rel="stylesheet" href="Blog/commentBox.css" />

	</head>
	<body class="subpage">

 <div id= "google_translate_element" style="background-color:white; background-size:cover;color: white;top: 0;display: block;margin-top: 0; height:50px;position:absolute;left:0; right: 0; top:0;width:100%; color:white;">

    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
<br>
		 <div align="right"><a href="../index.php"><button style="background-color: red;color: white; width:15%;padding: 10px; margin: 40px;">Back To Home</button></a></div>

			<section id="main" class="wrapper">
				<div class="inner">
					<div class="container" style="width: 80%; height:auto;">
					<div class="row">
						<div class="9u 12u$(small)">

						</div>
						<div class="3u 12u$(small)"  style="margin-right: 10px;">
							<a href="blogWrite.php" class="button special fit"><span class="glyphicon glyphicon-pencil"></span> Write a Blog</a>
						</div>
					</div>
					<br />
					<?php
						while($row = $result->fetch_array()) {
							$id = $row['blogId'];
							$sql = "SELECT * FROM blogfeedback WHERE blogId = '$id'";
							$result1 = mysqli_query($conn, $sql);
							$numComment = mysqli_num_rows($result1);
					?>
					<div class="box">
						<h2><?= $row['blogTitle']; ?></h2>
						<blockquote>
							<?= $row['blogContent']; ?>
							<p>--- <?= $row['blogUser']; ?></p>
							<p><?= $row['blogTime']; ?></p>
						</blockquote><br>

						<form method="post" action="blogView.php">
							<div class="row">
							
		
								<div class="6u 12u$(xsmall)">
									<span class="glyphicon glyphicon-pencil"></span> Comments : <?= $numComment ?></button>
								</div>
									<div class="12u$">
									<br>
									<textarea name="user" id="user" rows="1" placeholder="Write Username!"></textarea>
								</div>
								<div class="12u$">
									<br>
									<textarea name="comment" id="comment" rows="1" placeholder="Write a Comment!"></textarea>
								</div>
								<div class="12u$">
									<center>
									<br>
									<input type="submit" name="<?php echo 'submit'.$id; ?>" class="button special small" value="Submit"/>
									</center></div>

							
							</form>
<br>

						<?php
							if($result1) {

								while($row1 = $result1->fetch_array()) {
							
						?>

							<div class="con darker"style="overflow-wrap: break-word;width:250px;height: auto;">

								<?php if($row1['commentUser']=='Admin'||$row1['commentUser']=='admin'){
									?>
<img style="display: inline-block;" src="<?php echo $row1['commentPic']?>" alt="Avatar"><span><em><?= $row1['commentUser']; ?></em></span>
								<?php
							}
								else{
									?>
								<img style="display: inline-block;" src="<?php echo $row1['commentPic']?>" alt="Avatar"><span><em><?= $row1['commentUser']; ?></em></span>
								<?php
							}
							?><br>
				
								<?= $row1['comment']; ?>
								<span class="time-right"><?= formatDate($row1['commentTime']); ?></span>
		</div>	

							<?php 
							}
							 ?>

						<?php
						 }
						 ?>
					</div>	</div>
	
					<?php 
					}
					 ?>

				</div>
				 <br>
			</section>
																			<script>
									if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

		<script>

		/*	function ajax()
			{
				var req = new XMLHttpRequest();
				req.onreadystatechange = function()
				{
					if(req.readyState == 4 && req.status == 200)
					{
						document.getElementById('liked').innerHTML = req.responseText;
					}
				}
				req.open('POST', 'Blog/blogViewProcess.php', 'true');
				req.send();
			}
			setInterval(function(){ajax()}, 1000);*/

		</script>


		<script src="jquery/jquery-3.2.1.min.js"></script>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
