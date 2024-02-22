<?php include 'templates/header.php' ?>

<style>
  @font-face {
    font-family: protestriot-regular;
    src: url(fonts/ProtestRiot-Regular.ttf);
  }

  .act {
    text-align: center;
    font-family: protestriot-regular;
    color: #0A1172;
  }

  #actTitle {
    max-width: 40rem;
    margin: auto;
  }

  .links {
    text-align: center;
  }

  .prev {
    margin-right: 18px;
  }

  #main {
    max-width: 500rem;
  }

  .card-header {
    font-family: Arial, Helvetica, sans-serif;
    font-size:25px; 
    font-weight: bold; 
    color: #0A1172;
  }

  h2, h3, h5, h6, strong {
    color: #0A1172; 
  }

  p {
    font-size: 16px;
  }

  p.txt {
    margin-left: 10px;
  }

  #secfoot{
   background-color: #fce2e2;
   padding:30px;
  }

  #prevnex {
    border-style: hidden;
  }

  #prev {
    float: left;
    display: grid;
    margin-top: -15px;
  }

  .next {
    float:right;
    display: grid;
  }
</style>

<!-- Activity Number and Button(s) -->
<div class="card bg-light mb-3" id="actTitle";>
  <div class="card-body">
    <h2 class="act">ACTIVITY 3</h2>
  </div>
</div>

<!-- Problems, Solutions, and Output -->
<div class="card border-primary mb-3" id="main">
  <div class="card-header">Problem 1</div>
  <div class="card-body">
    <p>
      A. Write a PHP script to calculate the area of a rectangle using arithmetic operators. Display the result.
    </p>

    <p>
      B. Implement a script that converts currency from one denomination to another using arithmetic operators. Display the converted amount.
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <p class="txt">
        echo "A. Area of a rectangle: "; <br>
	$length = 20;	<br>
	$width = 30;	<br>
	<br>
	$area = $length * $width; <br>
	echo "$area";  <br>
    </p>

    <h6>B.</h6>
    <p class="txt">
        echo "B. Convert currency: ";  <br>
	$amountPhp = 50;	<br>
	$conversionRate = 0.018;  <br>

	$convertedAmount = $amountPhp * $conversionRate;  <br>
	echo "Equivalent in USD: " . $convertedAmount;  <br>
    </p>

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
    <?php 
	// output for Problem 1-A
	echo "<strong>A.</strong> Area of a rectangle: "; 
	$length = 20;
	$width = 30;
	
	$area = $length * $width;
	echo "$area";
	
	echo "<br>";
	
	// output for Problem 1-B
	echo "<strong>B.</strong> Convert currency: ";
	$amountPhp = 50;
	$conversionRate = 0.018;
	
	$convertedAmount = $amountPhp * $conversionRate;
	echo "<br>Equivalent in USD: " . $convertedAmount;
	
	?>
    </p>  
  </div>
</div>
<div class="card border-secondary mb-3" id="main"">
  <div class="card-header">Problem 2</div>
  <div class="card-body">
  	<p>
	   A. Track the progress of a fundraising campaign by updating the donation total dynamically using combined assignment operators. Display the updated total.
	</p>
	<p>
	   B. Implement a voting system where candidate votes are incremented based on user input. Display the final vote count for each candidate.
	</p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <p class="txt">
        echo "A. Track fundraising: ";  <br>
	$totalDonation = 100;  <br>
	$newDonation = 20;  <br>
	$totalDonation += $newDonation;  <br>

	echo "Total donation: $" . $totalDonation;  <br>
    </p>

    <h6>B.</h6>
    <p class="txt">
        echo "B. Voting system: ";  <br>
	$candidateVotes = 49;  <br>
	$userVote = 30;  <br>

	$candidate1Votes += $userVote;  <br>
	echo "Candidate 1 total votes: " . $candidate1Votes . ", Candidate 2 total votes: " . $candidate2Votes;
    </p>

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
    <?php 
        // output for Problem 2-A
	echo "<strong>A.</strong> Track fundraising: "; 
	$totalDonation = 100;
	$newDonation = 20;
	$totalDonation += $newDonation;

	echo "<br>Total donation: $" . $totalDonation;
	
	echo "<br>";

	// output for Problem 2-B
	echo "<strong>B.</strong> Voting system: ";
	$candidate1Votes = 49;
	$candidate2Votes = 78;
	$userVote = 1;

	$candidate1Votes += $userVote;
	echo "<br>Candidate 1 total votes: " . $candidate1Votes . ", Candidate 2 total votes: " . $candidate2Votes;
      ?>
    </p> 
  </div>
</div>

<!-- Problem 3 -->
<div class="card border-success mb-3" id="main">
  <div class="card-header">Problem 3</div>
  <div class="card-body">
    <p>
      A. Compare the performance of two athletes in a race and determine the winner using comparison operators. Display the result.
    </p>
    <p>
      B. Evaluate the efficiency of two algorithms based on their execution times using comparison operators. Display the more efficient algorithm
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <p class="txt">
        echo "A. Compare athlete times: ";   <br>
	$athlete1 = 10.20;  <br>
	$athlete2 = 9.78;  <br>

	$winner = ($athlete1 < $athlete2) ? "Athlete 1" : "Athelete 2"; <br>
	echo "The winner is: $winner";  <br>
	
    </p>

    <h6>B.</h6>
    <p class="txt">
        echo "B. Evaluate algorithm efficiency: ";  <br>
	$firstAlgorithm = 0.003;  <br>
	$secondAlgorithm = 0.001;  <br>

	$faster = ($firstAlgorithm < $secondAlgorithm) ? "First Algotrithm" : "Second Algorithm";  <br>
	echo "<br>Faster Algorithm is the $faster";  <br>
    </p>

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
    <?php 
        // output for Problem 3-A
	echo "<strong>A.</strong> Compare athlete times: "; 
	$athlete1 = 10.20;
	$athlete2 = 9.78;

	$winner = ($athlete1 < $athlete2) ? "Athlete 1" : "Athelete 2";
	echo "<br>The winner is: $winner";
	
	echo "<br>";

	// output for Problem 3-B
	echo "<strong>B.</strong> Evaluate algorithm efficiency: ";
	$firstAlgorithm = 0.003;
	$secondAlgorithm = 0.001;

	$faster = ($firstAlgorithm < $secondAlgorithm) ? "First Algotrithm" : "Second Algorithm";
	echo "<br>Faster Algorithm is the $faster";
      ?>
    </p> 
  </div>
</div>

<!-- Problem 4 -->
<div class="card border-danger mb-3" id="main">
  <div class="card-header">Problem 4</div>
  <div class="card-body">
    <p>
      A. Calculate the factorial of a number using postfix increment/decrement operations. Display the factorial.
    </p>
    <p>
      B. Simulate the movement of a vehicle along a track using prefix increment/decrement operations. Display the final position of the vehicle.
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <p class="txt">
        echo "A. Calculate factorial: "; <br>
	$number = 10;  <br>
	$factorial = 1;  <br>

	for ($i = 1; $i <= $number; $i++) {  
		$factorial *= $i;
	}  <br>

	echo "Factorial of $number: $factorial";  <br>
    </p>

    <h6>B.</h6>
    <p class="txt">
        echo "B. Simulate vehicle movement: ";  <br>
	$point = 1;  <br> 
	$distance = 15; <br>

	$point += $distance; <br>
	echo "Position of the vehicle: $point";  <br>
    </p>

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
      <?php 
        // output for Problem 4-A
	echo "<strong>A.</strong>Calculate factorial: "; 
	$number = 10;
	$factorial = 1;

	for ($i = 1; $i <= $number; $i++) {
		$factorial *= $i;
	}

	echo "<br>Factorial of $number: $factorial";
	
	echo "<br>";

	// output for Problem 4-B
	echo "<strong>B.</strong>Simulate vehicle movement: ";
	$point = 1;
	$distance = 15;

	$point += $distance;
	echo "<br>Position of the vehicle: $point";
      ?>
    </p>
  </div>
</div>

<!-- Problem 5 -->
<div class="card border-warning mb-3" id="main">
  <div class="card-header">Problem 5</div>
  <div class="card-body">
    <p>
      A. Determine eligibility for a discount based on purchase amount and customer loyalty using logical operators. Display whether the customer is eligible for a discount.
    </p>
    <p>
      B. Design a decision-making system for a chatbot to respond to user queries using logical operators. Display the appropriate response based on the query.
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <p class="txt">
      echo "A. Determine discount
	eligibility: ";  <br>
	$amount = 500;  <br>
	$loyaltyDiscount = false;  <br>

	$discount = ($amount > 300 && $loyaltyDiscount) ? "With Discount" : "Without Discount";  <br>

	echo "Discount Eligibility: $discount";  <br>
    </p>

    <h6>B.</h6>
    <p class="txt">
    echo "B. Chatbot decision-making: ";
	$query = "time";  <br>
	$time = ($query == "time") ? "It's midnight" : "Invalid!";  <br>

	echo "Response of the Chatboot: $time"; <br>
    </p>

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
      <?php 
       // output for Problem 5-A
	echo "<strong>A.</strong> Determine discount
	eligibility: "; 
	$amount = 500;
	$loyaltyDiscount = false;

	$discount = ($amount > 300 && $loyaltyDiscount) ? "With Discount" : "Without Discount";

	echo "<br>Discount Eligibility: $discount";
	
	echo "<br>";

	// output for Problem 5-B
	echo "<strong>B.</strong> Chatbot decision-making: ";
	$query = "time";
	$time = ($query == "time") ? "It's midnight" : "Invalid!";

	echo "<br>Response of the Chatboot: $time";
	?>
    </p> 
  </div>
</div>

<div id="secfoot">
  <div   id="prevnex";>
    <div class="links">
      <a href="act2.php" class="prev"> <button type="button" class="btn btn-primary" id="prev">Previous</button></a>

      <a href="#" class="next"> <button type="button" class="btn btn-primary disabled" id="prev">Next</button></a>
    </div>
  </div>
</div>

<?php include 'templates/footer.php' ?>
