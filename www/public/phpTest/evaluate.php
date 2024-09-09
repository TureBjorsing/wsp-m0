<!doctype html>
<html>
<head lang="sv"></head>
<body>
<h1>Matematiktest</h1>
<h2>Resultat</h2>
<?php
		$namn = $_POST['namn'];
     	$ans1 = $_POST['q1'];
     	$ans2 = $_POST['q2'];
		$ans3 = $_POST['q3'];
		$ans4 = $_POST['q4'];
		$ans5 = $_POST['q5'];
     	$points = 0;
     	
     	if($ans1 == 9)
           $points++;
     	if($ans2 == 15)
           $points++;
		if($ans3 == "hunden")
           $points++;
		if($ans4 == 50)
           $points++;
		if($ans5 == 3)
           $points++;
     	echo("<p>Du fick " . $points . " av 5 möjliga</p>");
		echo("<p>Bra jobbat " . $namn . "!");
?>
</body>
</html>