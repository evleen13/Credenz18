<?php

    $con=mysqli_connect("localhost","credenz_nthadmin","pisbcredenz2017","credenz_nthdb");
    // Check connection
    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $res=mysqli_query($con,"SELECT username,level,time,admin FROM nth ORDER BY level desc, time asc");

    if(mysqli_num_rows($res)) {
        echo "<table class='table' align=\"center\" style='fontsize=2em;'>
	   <tr style=''>
       <td align=\"center\"><b>RANK</b></td>
	   <td align=\"center\"><b>USERNAME</b></td>
       <td align=\"center\"><b>LEVEL</b></td>
	   </tr>";
        $i=1;$j=1;
        while($row = mysqli_fetch_array($res))
        {
            if($i<=10)
            {
                if($row['admin']==0)
                {
                    echo "<tr>";
                    echo "<td align=\"center\">".$i."</td>";
                    echo "<td align=\"center\">" . $row['username'] . "</td>";
                    echo "<td align=\"center\">" . $row['level'] . "</td>";
                    echo "</tr>";
                    $i++;
                }
            }
        }
        echo "</table>";
    }
    else {
        header('Error');
    }
?>
