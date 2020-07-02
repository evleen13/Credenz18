<?php


	$connection = mysqli_connect('localhost', 'root', '', 'dbname');

	if(!$connection){
		die("Error in database connection");
	}

	$output = '';
	$result = mysqli_query($connection, "SELECT * FROM table_name");
	while($row = mysqli_fetch_assoc($result)){
		$output .= "
		    <tr>
		        <td>{$row["p1"]}</td>
		        <td>{$row["email1"]}</td>
		        <td>{$row["p2"]}</td>
		        <td>{$row["email2"]}</td>
		        <td>{$row["tid"]}</td>
		        <td>{$row["year"]}</td>
		    </tr>
		";
	}
?>

<html>
	<head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link type="text/css" href="./assets/css/argon.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
            <h2 class="text-center p-3">Participients in Datawiz</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Player1</th>
                        <th>Email1</th>
                        <th>Player2</th>
                        <th>Email2</th>
                        <th>Transaction Id</th>
                        <th>Year</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php echo $output; ?>
                    </tbody>
                </table>
            </div>
        </div>
	</body>
</html>