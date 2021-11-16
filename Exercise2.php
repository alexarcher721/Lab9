<?php   
		$correct=0;
        $r1="Incorrect";
        $r2="Incorrect";
        $r3="Incorrect";
        $r4="Incorrect";
        $r5="Incorrect";
       	$a1=$_POST['1'];
       	$a2=$_POST['2'];
       	$a3=$_POST['3'];
       	$a4=$_POST['4'];
       	$a5=$_POST['5'];
        if ($answer1 == "T") { 
        $correct++;
        $r1="Correct";
        }
        if ($answer2 == "T") {
        $correct++;
        $r2="Correct";
        }
        if ($answer3 == "T") { 
        $correct++; 
        $r3="Correct";
        }
        if ($answer4 == "T") { 
        $correct++; 
      	$r4="Correct";
        }
        if ($answer5 == "T") { 
        $correct++;
        $r5="Correct";
        }
        echo "<br>";
        echo "Question 1:", $r1, "<br>";
        echo "Question 2:", $r2, "<br>";
        echo "Question 3:", $r3, "<br>";
        echo "Question 4:", $r4, "<br>";
        echo "Question 5:", $r5, "<br>";
       	echo "Total Correct:", $correct/5;
    ?>

