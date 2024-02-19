<?php include 'templates/header.php' ?>

<style>
  #main {
    max-width: 500rem;
  }

  .card-header {
    font-family: Arial, Helvetica, sans-serif;
    font-size:25px; 
    font-weight: bold; 
    color: #0A1172;
  }

  h5, h6 {
    color: #0A1172; 
  }

  p.txt {
    margin-left: 10px;
  }
</style>

<!-- Problem 1 -->
<div class="card border-primary mb-3" id="main" style="max-width: 500rem;">
  <div class="card-header">Problem 1</div>
  <div class="card-body">

    <!-- Instructions -->
    <p class="card-text">Write a program to print “Hello World” using echo</p>
    <h6>Description:</h6>
    <p class="txt">
      Write a program to print “Hello World” using echo only?
    </p>
    <h6>Conditions:</h6>
    <p class="txt">You can not use any variable</p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <p class="txt">echo "Hello World";</p>

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
      <?php echo "Hello World"; ?>
    </p>  
  </div>
</div>

<!-- Problem 2 -->
<div class="card border-secondary mb-3" id="main">
  <div class="card-header">Problem 2</div>
  <div class="card-body">
    <!-- Instructions -->
    <p class="card-text">Write a program to print “Hello PHP” using variable</p>

    <h6>Description:</h6>
    <p style="margin-left: 10px;">
      Write a program to print “Hello PHP” using php variable?
    </p>
    <h6>Conditions:</h6>
    <p style="margin-left: 10px;">
      You can not use text directly in echo but can use variable.
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <p style="margin-left: 10px;"> $hello = "Hello PHP"; <br>
        echo "$hello";
    </p>

    <h5>Output:</h5>
    <p style="margin-left: 10px;">
      <?php $hello = "Hello PHP";
        echo "$hello" 
      ?>
    </p>
  </div>
</div>

<!-- Problem 3 -->
<div class="card border-success mb-3" id="main">
  <div class="card-header">Problem 3</div>
  <div class="card-body">
  <p class="card-text">Write a program to print a string using echo + variable.</p>

  <h6>Description:</h6>
    <p style="margin-left: 10px;">
      Write a program to print “Welcome to the PHP World” using some part of the text in variable & some part directly in echo.
    </p>
    <h6>Conditions:</h6>
    <p style="margin-left: 10px;">
      You have to use a variable that contains string “PHP World”.
    </p>

    <h5>Solution:</h5>
    <p style="margin-left: 10px;"> 
        $a = "PHP World"; <br>
        echo "Welcome to $a"
    </p>

    <h5>Output:</h5>
    <p style="margin-left: 10px;">
      <?php 
      $a = "PHP World"; 
      echo "Welcome to $a";
      ?>
    </p>
  </div>
</div>

<?php include 'templates/footer.php' ?>
