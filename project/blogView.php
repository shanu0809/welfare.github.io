


<?php
	session_start();

	require 'db.php';


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['comment'])   AND $_POST['comment'] != "")
		{
			$sql = "SELECT * FROM blogdata ORDER BY blogId DESC";
			$result = mysqli_query($conn, $sql);

			while($row = $result->fetch_array())
			{
				$check = "submit".$row['blogId'];
				if(isset($_POST[$check]))
				{
					$blogId = $row['blogId'];
					break;
	 			}
			
}
			$comment = dataFilter($_POST['comment']);
		
	
			if($_POST['mail']=='shanujaintdl05@gmail.com')
			{
				$commentUser ='Admin';
				$pic = "emblem.jpg";
			}
			else if($_POST['mail']!=''){
					$commentUser =$_POST['mail'];
				$pic = "profile0.png";
			}
			else {
				$commentUser = "Anonymous";
				$pic = "profile0.png";
			}
		
		
			
			if(isset($blogId))
			{
				$sql = "INSERT INTO blogfeedback (blogId, comment, commentUser, commentPic)
						VALUES ('$blogId' ,'$comment', '$commentUser', '$pic');";
				$result = mysqli_query($conn, $sql);
			}
		}

		else
		{
			$sql = "SELECT * FROM blogdata ORDER BY blogId DESC";
			$result = mysqli_query($conn, $sql);

			while($row = $result->fetch_array())
			{
				$check = "like".$row['blogId'];
				if(isset($_POST[$check]))
				{
					$blogId = $row['blogId'];
					break;
				}
			}
			$likeCheck = "isLiked".$blogId;
			if(!isset($_SESSION[$likeCheck]) OR $_SESSION[$likeCheck] == 0)
			{
				$id = $_SESSION['id'];
				$sql = "SELECT * FROM likedata WHERE blogId = '$blogId' AND blogUserId = '$id'";
				$result = mysqli_query($conn, $sql);
				$num_rows = mysqli_num_rows($result);
				if($num_rows == 0)
				{
					$sql = "INSERT INTO likedata (blogId, blogUserId)
							VALUES('$blogId', '$id')";
					$result = mysqli_query($conn, $sql);
					$sql = "UPDATE blogdata SET likes = likes + 1 WHERE blogId = '$blogId'";
					$result = mysqli_query($conn, $sql);
					$_SESSION[$likeCheck] = 1;
				}
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

		<title>AgroCulture : Blogs</title>
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
	<body class="subpage" style="background:url('images/pic04.jpg'); color:#ffffff; background-size:cover;">

																		<?php require'menu.php';?>
		


					<div  align="right" style="border:none;padding-right: 40px;padding-top: 20px;padding-bottom: 10px;"> <button class="btn-primary" onclick="document.getElementById('id01')" style="width:auto;color:white;background-color:black;border: none;display: inline-block;font-size: 20px;font-weight: 600;vertical-align: middle, !important; padding: 10px 16px;line-height: 16px;overflow:hidden;"><a href="blogWrite.php">Write a blog</button></a></div><br>
					<main role="main">

      <section class="jumbotron text-center"style="background: url('img/imagess(1).jpg'); background-size:cover">
        <div class="container">
 
					<?php
						while($row = $result->fetch_array()) :?>
							<div class="dark" style="background-color:#e7ee2c;color:#000000; text-align: left;">
							<?php $id = $row['blogId'];
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
						</blockquote>

						<form method="post" action="blogView.php">
							<div class="row">
								<div class="6u 12u$(xsmall)">
									<button class = "button special small" name="<?php echo 'like'.$id; ?>">
									<span class="glyphicon glyphicon-thumbs-up"></span> Like</button>
									<span><?= $row['likes']?></span>
								</div>
								<div class="6u 12u$(xsmall)">
									<span class="glyphicon glyphicon-pencil"></span><button class="submit" align="left" name="click" class="button special small" value="Submit"/ style="width:100px;height:30px;background-color: lightyellow;border:none;">
									 Comments : <?= $numComment ?></button>
								</div>
								<div class="12u$">
									<br>
									<input type="email" style="width:500px; height:40px;" name="mail" value="" rows="1" placeholder="enter your email !" autocomplete="off"></input>
								</div>
								<div class="12u$">
									<br>
									<input type="text" style="width:500px; height:40px;" name="comment" id="comment" rows="1" placeholder="Write a Comment!"></input>
								</div>
								
								<div class="12u$">
									<center>
									<br>
									<input type="submit" align="left" name="<?php echo 'submit'.$id; ?>" class="button special small" value="Submit"/ style="width:100px;height:30px;background-color: skyblue">
									</center>
								</div>
							</div>
						</form>

						<?php
						if(isset($_POST['click'])):
							if($result1) :
								while($row1 = $result1->fetch_array()) :
							
						
						?>
							<div class="con darker">
								<?php 
								if($row1['commentUser']=='Anonymous'):?>
										<img src="<?php echo 'images/profileImages/'.$row1['commentPic']?>" alt="Avatar"><span><em><?= $row1['commentUser'];?></em></span> 
								<?php endif; 
							if($row1['commentUser']=='Admin'):
									 ?> 
									<img src="<?php echo 'img/'.$row1['commentPic']?>" alt="Avatar"><span><em><?= $row1['commentUser'];	?></em></span>
							<?php endif;?>
						
								
								<?= $row1['comment']; ?>
								<span class="time-right"><?= formatDate($row1['commentTime']); ?></span>
							</div>
						<?php endwhile;?>
<?php endif; ?> 
<?php endif;
mysqli_free_result($result1);
		?>
				</span>
					</div>
</div>
					<?php endwhile; ?>
</div>
				</div>
			</section>

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
