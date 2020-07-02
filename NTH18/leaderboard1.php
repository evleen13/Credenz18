
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

$res=mysqli_query($con,"SELECT username,admin,level,time FROM nth ORDER BY level desc, time asc");

echo "<h3 style='font-style:Lato;text-align:center;'>LEADERBOARD</h3>";
if(mysqli_num_rows($res))
{

	echo "<table class='table' align=\"center\">
	<tr style=''>
	<td align=\"center\">RANK</td>
	<td align=\"center\">USERNAME</td>
	<td align=\"center\">LEVEL</td>
	</tr>";
	$i=1;$j=0;
while($row = mysqli_fetch_array($res))
{
	if($i<=10)
	{
		if(!$row['admin']==0)
		 {
		  echo "<tr>";
		  echo "<td align=\"center\">".$i."</td>";
		  echo "<td align=\"center\">" . $row['username'] . "</td>";
		  echo "<td align=\"center\">" . $row['level'] . "</td>";
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
echo "</table>";
if(($row['admin'])==0)
	{
			
			# code...
			echo "<h5>Your Rank is : ".$rank."</h5>";
			echo "<h5>Your Current Level  : ".$level." </h5>";
		
	
	}
	

//$url=$_SERVER['REQUEST_URI'];
//header("Refresh: 60; URL=$url"); 
//	die();
}
else
{
	header('Error');
}

?>