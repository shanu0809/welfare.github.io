
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample PHP Database Application</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
	<style>
	.table{
		overflow-x: hidden;
	}
	</style>
</head>
<body>

  <?php
  
  //Change the password to match your configuration
require "connection.php";

  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  echo "<br>";
  


			
			/*
			 * second table
			 */
			$sql = "SELECT * FROM  scheme";
			$result = $conn->query($sql);
				
	
			echo "<div class='col-lg-6','col-sm-6','col-12' class='table'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>Type</th>";
				echo "<th>Title</th>";
						echo "<th>Sector</th>";
								echo "<th>Description</th>";
										
																echo "<th>Provision</th>";
					
										echo "<th>valid_from</th>";
											echo "<th>valid_upto</th>";
												echo "<th>Logo</th>";
													echo "<th>Website</th>";
														




				echo "</tr>";
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["job"] . "</td>";
						echo "<td>" . $row["title"] . "</td>";
							echo "<td>" . $row["sector"] . "</td>";
								echo "<td>" . $row["des"] . "</td>";
							
									echo "<td>" . $row["prov"] . "</td>";
										
															echo "<td>" . $row["valid_from"] . "</td>";
																echo "<td>" . $row["valid_upto"] . "</td>";
																	echo "<td>" . $row["imagedoc"] . "</td>";
																		echo "<td>" . $row["link"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "0 results";
				}
			
				echo "</table>";

			echo "</div>";
			echo "</div>";

		echo "</div>";
		
	echo "</div>";

  // Close connection
  mysqli_close($conn);
  ?>


</body>
</html>