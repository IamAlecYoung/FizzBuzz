<?php

class FizzBuzz
{
	//Predefining it to zero to avoid null issues
	public $WhatsTheNumber = 0;
	
	//A function to check the number and see if it is a remained to FizzBuzz
	public function MakeTheNumbersDance($WhatsTheNumber) {
		//Base IF statement to test the current number to see the modulus remainer		
		if($WhatsTheNumber % 15 == "0")
		{
			$Answer = "FizzBuzz";	
			return $Answer;
		}
		elseif($WhatsTheNumber % 5 == "0")
		{
			$Answer = "Buzz";
			return $Answer;
		}
		elseif($WhatsTheNumber % 3 == "0")
		{
			$Answer = "Fizz";
			return $Answer;
		}
		else
		{
			$Answer = $WhatsTheNumber;
			return $Answer;
		}	
	//After the Answer is returned from the IF statement, Echo it
	echo $Answer;
		
	}
	
	//This was just a little tester, echos a break in line.
	public function EchoMe()
	{
		echo "<br>";
	}
	
	
}

//Creating a new object from FizzBuzz class
$LetsPlay = new FizzBuzz;

//For Statement to check numbers against Methods.
for($i=1; $i<31; $i++)
{
	//Now to start the selection
	echo $LetsPlay->MakeTheNumbersDance($i);
	//And also edit the breakpoint.
	echo $LetsPlay->EchoMe();
}





?>