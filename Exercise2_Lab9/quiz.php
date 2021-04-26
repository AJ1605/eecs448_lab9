<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	$q1 = $_POST["q1"];
    	$q2 = $_POST["q2"];
    	$q3 = $_POST["q3"];
    	$q4 = $_POST["q4"];
    	$q5 = $_POST["q5"];
    
    	echo "Question 1: Oslo is the Capital of what country?";
	echo "<br>";
    	echo "      You answered: $q1";
	echo "<br>";
    	echo "      Correct answer: Norway";
	echo "<br>";
	echo "<br>";

    	echo "Question 2: Bangkok is the Capital of what country?";
	echo "<br>";
    	echo "      You answered: $q2";
	echo "<br>";
    	echo "      Correct answer: Thailand";
	echo "<br>";
	echo "<br>";

    	echo "Question 3: Beirut is the Capital of what country?";
	echo "<br>";
    	echo "      You answered: $q3";
	echo "<br>";
    	echo "      Correct answer: Lebanon";
	echo "<br>";
	echo "<br>";

    	echo "Question 4: Rome is the Capital of what country?";
	echo "<br>";
    	echo "      You answered: $q4";
	echo "<br>";
    	echo "      Correct answer: Italy";
	echo "<br>";
	echo "<br>";

    	echo "Question 5: How many countries are in Africa?";
	echo "<br>";
    	echo "      You answered: $q5";
	echo "<br>";
    	echo "      Correct answer: 54";
	echo "<br>";
	echo "<br>";

	$num = 0;
	if ($q1 == "Norway")
	{
		$num++;		
	}
	if ($q2 == "Thailand")
	{
		$num++;		
	}
	if ($q3 == "Lebanon")
	{
		$num++;		
	}
	if ($q4 == "Italy")
	{
		$num++;		
	}
	if ($q5 == "54")
	{
		$num++;		
	}

	$percent = ($num/5)*100;

	echo "You got $num correct!";
	echo "<br>";
	echo "Which is a $percent%!"; 
?>