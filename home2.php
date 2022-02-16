<?php
 session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Livin Fresh</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body background="background.png">

  <div class="header">
  <a><?php echo("<button onclick=\"location.href='logout.php'\">Logout</button>"); ?></a>
  <h1>Welcome </h1>

  </div>
  <div class="container">
    <div class="navbar">
      <div class="logo">
        <img src="images/livin logo.jpeg" width="200px">
      </div>
      <nav>
        <ul>
           
          
          <li><a> <?php echo("<button onclick=\"location.href='contact.php'\">Contact Us</button>");?></a></li>
          <li><a> <?php echo("<button onclick=\"location.href='Gallery.php'\">Gallery</button>");?></a></li>
          <li><a><?php echo("<button onclick=\"location.href='Cart.php'\">Cart</button>");?></a></li>
          <li><a><?php echo("<button onclick=\"location.href='about.php'\">About</button>");?></a></li>
        </ul>
    </nav>
  </div>
  <div class="row">
      <div class="col-2">
        <h1>LIVIN FRESH</h1>
        <h1>Giving Your Health<br>A New Intake!</h1>
        <p><h2>“Eating healthy food fills your body with energy and nutrients.
        <br>  Imagine your cells smiling back at you and saying:<br> “Thank you!”</h2></p>
        
      </div>
      <div class="col-2">
      <img src="page.png" class="center">
      </div>


</div>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="OOGSS-Chatbot"
  agent-id="d8f57fd5-9e99-49dd-9d42-c78a21d2db41"
  language-code="en"
></df-messenger>

</body>
</html>
