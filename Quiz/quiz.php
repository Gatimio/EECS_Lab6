<!DOCTYPE html>
<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>PHP Quiz</title>
    <link rel="stylesheet" href="qzstyle.css">
</head>
 
<body>
    <h1>Result </h1>

	<div id="page-wrap" >
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            $total = ($totalCorrect /5)*100;
            echo "<h2 id='results'> $totalCorrect/5 correct</h2>";
            echo "<h2 id='results'> Score: $total%</h2>";
            
        ?>

        <h2>Question 1: What does PHP stand for?</h2>
        <?php 
            if ($answer1 == "A") {
                echo "<div id='answers'> You answered: Private Home Page</div><br>";
                echo "<div id='answers'> Correct answer: PHP: Hypertext Preprocessor</div><br>";
            } else if ($answer1 == "B") {
                echo "<div id='answers'> You answered: Personal Hypertext Processor</div><br>";
                echo "<div id='answers'> Correct answer: PHP: Hypertext Preprocessor</div><br>";
            } else if ($answer1 == "C") {
                echo "<div id='answers'> You answered: PHP: Hypertext Preprocessor</div><br>";
                echo "<div id='answers'> Correct answer: PHP: Hypertext Preprocessor</div><br>";
            } else if ($answer1 == "D"){
                echo "<div id='answers'> You answered: Personal HTML Preprocessore</div><br>";
                echo "<div id='answers'> Correct answer: PHP: Hypertext Preprocessor</div><br>";
            } else {
                echo "<div id='answers'> You did not select an answer</div><br>";
                echo "<div id='answers'> Correct answer:  PHP: Hypertext Preprocessor</div><br>";
            }
        ?>

        <h2>Question 2: If you freeze water, what do you get?</h2>
        <?php 
            if ($answer2 == "A") {
                echo "<div id='answers'> You answered: Mist</div><br>";
                echo "<div id='answers'> Correct answer: Ice</div><br>";
            } else if ($answer2 == "B") {
                echo "<div id='answers'> You answered: Steam</div><br>";
                echo "<div id='answers'> Correct answer: Ice</div><br>";
            } else if ($answer2 == "C") {
                echo "<div id='answers'> You answered: Precipitation</div><br>";
                echo "<div id='answers'> Correct answer: Ice</div><br>";
            } else if ($answer2 == "D"){
                echo "<div id='answers'> You answered: Ice</div><br>";
                echo "<div id='answers'> Correct answer: Ice</div><br>";
            } else {
                echo "<div id='answers'> You did not select an answer</div><br>";
                echo "<div id='answers'> Correct answer:  Ice</div><br>";
            }
        ?>

        <h2>Question 3: On which holiday do you go trick-or-treating?</h2>
        <?php 
            if ($answer3 == "A") {
                echo "<div id='answers'> You answered: Halloween</div><br>";
                echo "<div id='answers'> Correct answer: Halloween</div><br>";
            } else if ($answer3 == "B") {
                echo "<div id='answers'> You answered: Christmas</div><br>";
                echo "<div id='answers'> Correct answer: Halloween</div><br>";
            } else if ($answer3 == "C") {
                echo "<div id='answers'> You answered: Valentine's Day</div><br>";
                echo "<div id='answers'> Correct answer: Halloween</div><br>";
            } else if ($answer3 == "D") {
                echo "<div id='answers'> You answered: New Year</div><br>";
                echo "<div id='answers'> Correct answer: Halloween</div><br>";
            } else {
                echo "<div id='answers'> You did not select an answer </div><br>";
                echo "<div id='answers'> Correct answer:  Halloween</div><br>";
            }
        ?>

        <h2>Question 4: Which ocean is off the California coast?</h2>
        <?php 
            if ($answer4 == "A") {
                echo "<div id='answers'> You answered: The Atlantic</div><br>";
                echo "<div id='answers'> Correct answer: The Pacific</div><br>";
            } else if ($answer4 == "B") {
                echo "<div id='answers'> You answered: The Pacific</div><br>";
                echo "<div id='answers'> Correct answer: The Pacific</div><br>";
            } else if ($answer4 == "C") {
                echo "<div id='answers'> You answered: The Indian</div><br>";
                echo "<div id='answers'> Correct answer: The Pacific</div><br>";
            } else if ($answer4 == "D") {
                echo "<div id='answers'> You answered: The Antarctic</div><br>";
                echo "<div id='answers'> Correct answer: The Pacific</div><br>";
            } else {
                echo "<div id='answers'> You did not select an answer</div><br>";
                echo "<div id='answers'> Correct answer:  The Pacific</div><br>";
            }
        ?>  

        <h2>Question 5: Where is the Great Pyramid of Giza?</h2>
        <?php 
            if ($answer5 == "A") {
                echo "<div id='answers'> You answered: Canada</div><br>";
                echo "<div id='answers'> Correct answer:  Egypt</div><br>";
            } else if ($answer5 == "B") {
                echo "<div id='answers'> You answered: California</div><br>";
                echo "<div id='answers'> Correct answer:  Egypt</div><br>";
            } else if ($answer5 == "C") {
                echo "<div id='answers'> You answered: Europe</div><br>";
                echo "<div id='answers'> Correct answer:  Egypt</div><br>";
            } else if ($answer5 == "D") {
                echo "<div id='answers'> You answered:  Egypt</div><br>";
                echo "<div id='answers'> Correct answer:  Egypt</div><br>";
            } else {
                echo "<div id='answers'> You did not select an answer</div><br>";
                echo "<div id='answers'> Correct answer:  Egypt</div><br>";
            }
        ?>  
	</div>
 
</body>
 
</html>