<!-- <!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
  <title>Web Master</title> -->
  <?php include 'templates/header.php' ?>
  <style>
  * {
    background-color: #DCDCDC;
    margin: 0;
    padding: 0;
    border: 0;
  }

  #container {
    width: 62%;
    margin-left: 20%;
    margin-right: 20%;
  }

  #name {
    text-align: center;
    font-size: 30px;
    margin-top: 10px;
    padding: 15px;
  }

  h1, h4, strong, h5 {
    color: #0A1172;
  }

  strong {
    font-size: 15px;
    margin-left: 10px;
    font-weight: 1;
  }

  #personalInfo {
    font-size: 14px;
    margin-left: 15.5%;
    margin-right: 15.5%;
    padding: 10px; 
  }

  .address {
    margin-left: 9.92%;
    text-wrap: balance;
  }

  .contact {
    display: flow;
    text-wrap: balance;
    margin-left: 210px;
    margin-top: -74px;
  }

  .info p {
    font-size: 14px;
    padding: 1px;
    margin-top: 3px;
    margin-bottom: 3px;
  }

  hr {
    height: 2px;
    border: 1px solid #0A1172;
  }

  .schools {
    margin-left: 80px;
    font-size: 14px;
    margin-top: -21px;
  }

  h5 {
    margin-left: 10px;
    font-weight: 1;
    font-size: 15px;
    padding: 1px;
    margin-top: 3px;
  }

  ul li {
    list-style: none;
    font-size: 14px;
    margin-left: 20px;
    padding: 1px;
    margin-top: 3px;
  }

  li::before {
    content: "\2022";
    color: #0A1172;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
  }
  </style>
<!-- </head> -->

  <?php 
      echo '<div id="container">
      <div id="name">
        <h1>April Bitang</h1>
      </div>
  
      <div id="personalInfo">
        <div class="address">
          <p>San Isidro, Kitaotao</p>
          <p>Bukidnon, Philippines</p>
        </div>
        <div class="contact">
          <p>Mob.: 0991 578 8900</p>
          <p>Email: s.bitang.aprilrose@cmu.edu.ph</p>
        </div>
      </div>
  
      <div class="info">
        <h4>Personal Information</h4>
        <hr>
        <p><strong>Age:</strong> 19</p>
        <p><strong>Sex:</strong> Female</p>
        <p><strong>Birthday:</strong> April 30, 2004</p>
        <p><strong>Height:</strong> 164cm</p>
        <p><strong>Weight:</strong> 59kg</p>
        <p><strong>Education:</strong> 
          <div class="schools">
            <p>- San Isidro Elementary School</p>
            <p>- Kitaotao National High School</p>
            <p>- Kitaotao National High School</p>
            <p>- Central Mindanao University</p>
          </div>
        </p>
  
      </div>
  
      <div id="experience">
        <h4>Experiences</h4>
        <hr>
        <div>
          <ul>
            <li></li>
          </ul>
        </div>
  
      </div>
  
      <div id="skills">
        <h4>Skills</h4>
        <hr>
        <p></p>
        <div>
          <ul>
            <li>Adaptable</li>
            <li>Resilient</li>
            <li>Active Listener</li>
            <li>Creative</li>
            <li>Ability to learn quickly</li>
          </ul>
        </div>';
    ?>
<?php include 'templates/footer.php' ?>

<!-- </html> -->