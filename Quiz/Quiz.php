<?php
	$a=0;
	if(isset($_POST['quiz1']))
	{
		$quiz1 = $_POST['quiz1'];
		if($quiz1 == 'Italy')
		{
			$a++;
		}
		echo("Question 1: Who won the 2006 FIFA World Cup?");
		echo "<br>";
		echo("You answered: ".$quiz1);
		echo "<br>";
		echo("Correct Answer is: Italy");
		
	}
	else
	{
		echo("Please answer Question 1");
	}
	echo "<br>";
	echo "<br>";
	if(isset($_POST['quiz2']))
	{
		$quiz2 = $_POST['quiz2'];
		if($quiz2 == 'Chelsea')
		{
			$a++;
		}
		echo("Question 2: Who won the 2012 UEFA Champions League?");
		echo "<br>";
		echo("You answered: ".$quiz2);
		echo "<br>";
		echo("Correct Answer is: Chelsea");
		
	}
	else
	{
		echo("Please answer Question 2");
	}
	echo "<br>";
	echo "<br>";
	if(isset($_POST['quiz3']))
	{
		$quiz3 = $_POST['quiz3'];
		if($quiz3 == 'Ronaldinho')
		{
			$a++;
		}
		echo("Question 3: Who was FIFA World Player of the Year in 2005?");
		echo "<br>";
		echo("You answered: ".$quiz3);
		echo "<br>";
		echo("Correct Answer is: Ronaldinho");
		
	}
	else
	{
		echo("Please answer Question 3");
	}
	echo "<br>";
	echo "<br>";
	if(isset($_POST['quiz4']))
	{
		$quiz4 = $_POST['quiz4'];
		if($quiz4 == 'Manchester United')
		{
			$a++;
		}
		echo("Question 4: Who won the 2003 English Premier League?");
		echo "<br>";
		echo("You answered: ".$quiz4);
		echo "<br>";
		echo("Correct Answer is: Manchester United");
		
	}
	else
	{
		echo("Please answer Question 4");
	}
	echo "<br>";
	echo "<br>";
	if(isset($_POST['quiz5']))
	{
		$quiz5 = $_POST['quiz5'];
		if($quiz5 == 'Germany')
		{
			$a++;
		}
		echo("Question 5: Who won the Euro 1996 tournament?");
		echo "<br>";
		echo("You answered: ".$quiz5);
		echo "<br>";
		echo("Correct Answer is: Germany");
		
	}
	else
	{
		echo("Please answer Question 5");
	}
	echo "<br>";
	echo "<br>";
	echo("You answered: ".$a." correctly");
	echo "<br>";
	$b=($a/5)*100;
	echo("Your percent is: ".$b."%");

	

?>
