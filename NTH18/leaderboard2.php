<?php

if(!isset($_SESSION)){
    session_start();
    include_once("config.php");//We include this to initialize global constants. See config.php

}

$con=mysqli_connect("localhost","credenz_nthadmin","pisbcredenz2017","credenz_nthdb");
// Check connection
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$res=mysqli_query($con,"SELECT admin,username,level,time FROM nth WHERE admin=0 ORDER BY level desc, time asc");

echo "<h3 style='font-style:Lato;'>LEADERBOARD</h3>";

if(mysqli_num_rows($res))
{

	echo "<div id='leaderboard11'><table class='table'>
	<tr style='width:70px;'>
	<td style='width:15px;'>RANK</td>
	<td style='width:35px;'>USERNAME</td>
	<td style='width:15px;'>LEVEL</td>
	</tr>";
	$i=1;$j=1;
while($row = mysqli_fetch_array($res))
{
	if($i<=10)
	{
		if($row['admin']==0)
		 {
		  echo "<tr>";
		  echo "<td>".$i."</td>";
		  echo "<td>" . $row['username'] . "</td>";
		  echo "<td>" . $row['level'] . "</td>";
		  echo "</tr>";
	  	$i++;
		}
	}
	if ($_SESSION['username'] != $row['username'])
	{
		$j++;
		
	}else{
		$rank = $j;
	}
	if($_SESSION['username'] == $row['username']){
		$level = $row['level'];	
	}

}
if(($row['admin'])==0)
echo "</table>";
	{
			
			# code...
			echo "<h5>Your Rank is : ".$rank."</h5>";
			echo "<h5>Your Current Level  : ".$level." </h5>";
		
	
	}
	echo "</div>";
    
}
else
{
	header('Error');
}

?>