
<?php
	echo"<table>";
    	for ($x =1; $x <= 100; $x++){
        	if ($x== 1)
            {
              echo '<td>' ." ". '</td>';
              echo '<td>' .$x.'</td>';
            }
          	else
          	{
            echo '<td>' .$x.'</td>';
          	}
        }
        for ($i =1; $i <= 100; $i++){
            echo'<tr>';
            for ($j = 1; $j <= 100; $j++)
            		if ($j== 1)
                    {
                    	echo '<td>' .$i. '</td>';
                        echo '<td>' .$i*$j.'</td>';
                    }
                    else
                    {
                	echo '<td>' .$i*$j.'</td>';
                    }
           echo '</tr>';

        }

	echo"</table>";
?>

