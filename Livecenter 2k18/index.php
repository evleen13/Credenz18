<?php


	$connection = mysqli_connect('localhost:3306', 'credenz', 'Back~PisbC?End', 'credenz_live_center_db');

	if(!$connection){
		die("Error in database connection");
	}

	$output = '';
	$array = array();
	$result = mysqli_query($connection, "SELECT * FROM live");
	$reg= mysqli_query($connection, "SELECT count(id) FROM live");
	$countt=mysqli_fetch_assoc($reg);
	while($row = mysqli_fetch_assoc($result)){
		$array[] = $row;
		$output .= "
		    <div>
		    	<p><span class='font-weight-bold'>{$row['event_name']}</span> : <span>{$row['textarea']}</span></p>
		    </div>
		";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" href="css/argon.min.css">
	<title>Live center</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<style type="text/css">
		
		body{
			font-family: quicksand;
		}
	</style>
</head>

<img src="img/lol.png" class="img-responsive img-fluid" style="position: absolute;top:0px;left:20px;width: 10vw;"  />
<body class="bg-light">
	<div class="container-fluid">
		<div class="p-3 bg-white shadow-sm">
			<p class="display-3 text-center text-uppercase ">Live center</p>
		</div><br>
		<div class="row">
			<div class="col-md-8 col-lg-8">
				<div class="p-2 bg-white shadow-sm">
					<h3 class="text-center text-uppercase text-warning">Wallstreet</h3>
				</div><br>
				<div class="row">
					<div class="col-md-4 col-lg-4">
						<div class="card p-2">
							<p class="text-center text-dark">Leaderboard</p>
							<div class="card-body">

							</div>
						</div>
					</div>
					<div class="col-md-8 col-lg-8">
						<div class="card p-2">
							<p class="text-center text-dark">Updates</p>
							<div class="card-body">
								<?php echo $output; ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4">
				<div class="p-2 bg-white">
					<h3 class="text-center text-uppercase text-warning">What's hot</h3>
				</div><br>

				<div class="card p-2">
					<div class="card-body">

					</div>
				</div>

			</div>	
		</div>
	</div>
</body>
</html>