<?php include 'templates/header.php' ?>
  <h3>Activity 3</h3>
  <div class="container">

		<!-- Problem 1 -->
		<div style="margin-top: 30px;">
		<h5>Problem 1</h5>
		<p style="text-indent: 10px; margin-left: 10px;">
			A. Write a PHP script to calculate the area of a rectangle using arithmetic operators. Display the result.
		</p>
		<p style="text-indent: 10px; margin-left: 10px;" >
			B. Implement a script that converts currency from one denomination to another using arithmetic operators. Display the converted amount.
		</p>
		
		<h5>Solution:</h5>
		<p style="margin-left: 10px;">
			echo "A. Area of a rectangle: "; <br>
			$length = 20;	<br>
			$width = 30;	<br>

			$area = $length * $width; <br>
			echo "$area";  <br>
		</p>
		<p style="margin-left: 10px;">
			echo "B. Convert currency: ";  <br>
			$amountPhp = 50;	<br>
			$conversionRate = 0.018;  <br>

			$convertedAmount = $amountPhp * $conversionRate;  <br>
			echo "Equivalent in USD: " . $convertedAmount;  <br>
		</p>

		<h5>Output:</h5>
		<p style="margin-left: 10px;">
			<?php 
				// output for Problem 1-A
				echo "A. Area of a rectangle: "; 
				$length = 20;
				$width = 30;

				$area = $length * $width;
				echo "$area";
				
				echo "<br>";

				// output for Problem 1-B
				echo "B. Convert currency: ";
				$amountPhp = 50;
				$conversionRate = 0.018;

				$convertedAmount = $amountPhp * $conversionRate;
				echo "<br>Equivalent in USD: " . $convertedAmount;

			?>
		</p>
  </div>

	<!-- Problem 2 -->
	<div style="margin-top: 30px;">
		<h5>Problem 2</h5>
		<p style="text-indent: 10px; margin-left: 10px;">
			A. Track the progress of a fundraising campaign by updating the donation total dynamically using combined assignment operators. Display the updated total.
		</p>
		<p style="text-indent: 10px; margin-left: 10px;" >
			B. Implement a voting system where candidate votes are incremented based on user input. Display the final vote count for each candidate.
		</p>
		
		<h5>Solution:</h5>
		<p style="margin-left: 10px;">
			echo "A. Track fundraising: ";  <br>
			$totalDonation = 100;  <br>
			$newDonation = 20;  <br>
			$totalDonation += $newDonation;  <br>

			echo "Total donation: $" . $totalDonation;  <br>
		</p>
		<p style="margin-left: 10px;">
			echo "B. Voting system: ";  <br>
			$candidateVotes = 49;  <br>
			$userVote = 30;  <br>

			$candidate1Votes += $userVote;  <br>
			echo "Candidate 1 total votes: " . $candidate1Votes . ", Candidate 2 total votes: " . $candidate2Votes;
		</p>

		<h5>Output:</h5>
		<p style="margin-left: 10px;">
			<?php 
				// output for Problem 2-A
				echo "A. Track fundraising: "; 
				$totalDonation = 100;
				$newDonation = 20;
				$totalDonation += $newDonation;

				echo "<br>Total donation: $" . $totalDonation;
				
				echo "<br>";

				// output for Problem 2-B
				echo "B. Voting system: ";
				$candidate1Votes = 49;
				$candidate2Votes = 78;
				$userVote = 1;

				$candidate1Votes += $userVote;
				echo "<br>Candidate 1 total votes: " . $candidate1Votes . ", Candidate 2 total votes: " . $candidate2Votes;
			?>
		</p>
  </div>

	<!-- Problem 3 -->
	<div style="margin-top: 30px;">
		<h5>Problem 3</h5>
		<p style="text-indent: 10px; margin-left: 10px;">
			A. Compare the performance of two athletes in a race and determine the winner using comparison operators. Display the result.
		</p>
		<p style="text-indent: 10px; margin-left: 10px;" >
			B. Evaluate the efficiency of two algorithms based on their execution times using comparison operators. Display the more efficient algorithm
		</p>
		
		<h5>Solution:</h5>
		<p style="margin-left: 10px;">
			echo "A. Compare athlete times: ";   <br>
			$athlete1 = 10.20;  <br>
			$athlete2 = 9.78;  <br>

			$winner = ($athlete1 < $athlete2) ? "Athlete 1" : "Athelete 2"; <br>
			echo "The winner is: $winner";  <br>
			
		</p>
		<p style="margin-left: 10px;">
			echo "B. Evaluate algorithm efficiency: ";  <br>
			$firstAlgorithm = 0.003;  <br>
			$secondAlgorithm = 0.001;  <br>

			$faster = ($firstAlgorithm < $secondAlgorithm) ? "First Algotrithm" : "Second Algorithm";  <br>
			echo "<br>Faster Algorithm is the $faster";  <br>
		</p>

		<h5>Output:</h5>
		<p style="margin-left: 10px;">
			<?php 
				// output for Problem 3-A
				echo "A. Compare athlete times: "; 
				$athlete1 = 10.20;
				$athlete2 = 9.78;

				$winner = ($athlete1 < $athlete2) ? "Athlete 1" : "Athelete 2";
				echo "<br>The winner is: $winner";
				
				echo "<br>";

				// output for Problem 3-B
				echo "B. Evaluate algorithm efficiency: ";
				$firstAlgorithm = 0.003;
				$secondAlgorithm = 0.001;

				$faster = ($firstAlgorithm < $secondAlgorithm) ? "First Algotrithm" : "Second Algorithm";
				echo "<br>Faster Algorithm is the $faster";
			?>
		</p>
  </div>

	<!-- Problem 4 -->
	<div style="margin-top: 30px;">
		<h5>Problem 4</h5>
		<p style="text-indent: 10px; margin-left: 10px;">
			A. Calculate the factorial of a number using postfix increment/decrement operations. Display the factorial.
		</p>
		<p style="text-indent: 10px; margin-left: 10px;" >
			B. Simulate the movement of a vehicle along a track using prefix increment/decrement operations. Display the final position of the vehicle.
		</p>
		
		<h5>Solution:</h5>
		<p style="margin-left: 10px;">
			echo "A. Calculate factorial: "; <br>
			$number = 10;  <br>
			$factorial = 1;  <br>

			for ($i = 1; $i <= $number; $i++) {  
				$factorial *= $i;
			}  <br>

			echo "Factorial of $number: $factorial";  <br>
			
		</p>
		<p style="margin-left: 10px;">
		echo "B. Simulate vehicle movement: ";  <br>
				$point = 1;  <br> 
				$distance = 15; <br>

				$point += $distance; <br>
				echo "Position of the vehicle: $point";  <br>
		</p>

		<h5>Output:</h5>
		<p style="margin-left: 10px;">
			<?php 
				// output for Problem 4-A
				echo "A. Calculate factorial: "; 
				$number = 10;
				$factorial = 1;

				for ($i = 1; $i <= $number; $i++) {
					$factorial *= $i;
				}

				echo "<br>Factorial of $number: $factorial";
				
				echo "<br>";

				// output for Problem 3-B
				echo "B. Simulate vehicle movement: ";
				$point = 1;
				$distance = 15;

				$point += $distance;
				echo "<br>Position of the vehicle: $point";
			?>
		</p>
  </div>

	<!-- Problem 5 -->
	<div style="margin-top: 30px;">
		<h5>Problem 5</h5>
		<p style="text-indent: 10px; margin-left: 10px;">
			A. Determine eligibility for a discount based on purchase amount and customer loyalty using logical operators. Display whether the customer is eligible for a discount.
		</p>
		<p style="text-indent: 10px; margin-left: 10px;" >
			B. Design a decision-making system for a chatbot to respond to user queries using logical operators. Display the appropriate response based on the query.
		</p>
		
		<h5>Solution:</h5>
		<p style="margin-left: 10px;">
			echo "A. Determine discount
			eligibility: ";  <br>
			$amount = 500;  <br>
			$loyaltyDiscount = false;  <br>

			$discount = ($amount > 300 && $loyaltyDiscount) ? "With Discount" : "Without Discount";  <br>

			echo "Discount Eligibility: $discount";  <br>
			
		</p>
		<p style="margin-left: 10px;">
			echo "B. Chatbot decision-making: ";
			$query = "time";  <br>
			$time = ($query == "time") ? "It's midnight" : "Invalid!";  <br>

			echo "Response of the Chatboot: $time"; <br>
		</p>

		<h5>Output:</h5>
		<p style="margin-left: 10px;">
			<?php 
				// output for Problem 4-A
				echo "A. Determine discount
				eligibility: "; 
				$amount = 500;
				$loyaltyDiscount = false;

				$discount = ($amount > 300 && $loyaltyDiscount) ? "With Discount" : "Without Discount";

				echo "<br>Discount Eligibility: $discount";
				
				echo "<br>";

				// output for Problem 3-B
				echo "B. Chatbot decision-making: ";
				$query = "time";
				$time = ($query == "time") ? "It's midnight" : "Invalid!";

				echo "<br>Response of the Chatboot: $time";
			?>
		</p>
  </div>

</div>
<?php include 'templates/footer.php' ?>