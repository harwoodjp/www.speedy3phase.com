<?php 
	include("./utils/db_calls.php");
	$conn = db_connect();
	$result = select($conn, "SELECT * FROM dev_log ORDER BY id DESC");
?>

<html>
	<head>
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">		
		<!-- Fonts -->		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Slabo+27px" rel="stylesheet">
		<!-- JS -->				
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="app.js"></script>			
	</head>

	<body>
		<div class="heading container">
			<h1>Site Progress</h1>
			<hr>
		</div>

		<div class="log container">
			<div class="flex_column">
				<div id="log_results_key" class="flex_row">
					<span class="date">Date</span>
					<span class="task">Task</span>
					<span class="progress_">Progress</span>
				</div>
				<?php while ($row = $result->fetch_assoc()) { ?>
					<div id="log_results" class="flex_row">
						<span class="date">
							<?=$row["date"] ?>
						</span>
						<span class="task">
							<?=$row["task"] ?>
						</span>
						<span class="progress_">
							<?=$row["progress"] ?>
						</span>
					</div>
				<?php } ?>
			</div>
		</div>
	</body>
</html>
