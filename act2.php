<?php include 'templates/header.php' ?>
<h3>Activity 2</h3>
  <div class="container">

  <!-- Problem 1 -->
    <div style="margin-top: 30px;">
      <h5>Problem 1</h5>
      <p style="margin-left: 10px;">
        Write a program to print “Hello World” using echo
      </p>
      <h6>Description:</h6>
      <p style="margin-left: 10px;">
        Write a program to print “Hello World” using echo only?
      </p>
      <h6>Conditions:</h6>
      <p style="margin-left: 10px;">You can not use any variable</p>

      <h5>Solution:</h5>
      <p style="margin-left: 10px;">echo "Hello World";</p>

      <h5>Output:</h5>
      <p style="margin-left: 10px;">
        <?php echo "Hello World"; ?>
      </p>
    </div>

    <!-- Problem 2 -->
    <div style="margin-top: 30px;">
      <h5>Problem 2</h5>
      <p style="margin-left: 10px;">
        Write a program to print “Hello PHP” using variable
      </p>
      <h6>Description:</h6>
      <p style="margin-left: 10px;">
        Write a program to print “Hello PHP” using php variable?
      </p>
      <h6>Conditions:</h6>
      <p style="margin-left: 10px;">
        You can not use text directly in echo but can use variable.
      </p>

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

    <!-- Problem 3 -->
    <div style="margin-top: 30px;">
      <h5>Problem 3</h5>
      <p style="margin-left: 10px;">
        Write a program to print a string using echo + variable.
      </p>
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