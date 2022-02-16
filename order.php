<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}
.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  background-position: top;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url(organic.jpeg);
  height: 100%;

}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color:#000;
}

.caption span.border {
  background-color: #111;
  color: white;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption">


    <span class="border">YOUR ORDER IS CONFIRMED , YOU WILL RECEIVE YOUR GROCERY ITEMS WITHIN A DAY.<br>THANK YOU</br></span>
    
    
  </div>
  <a><?php echo("<button onclick=\"location.href='home2.php'\">HOME</button>"); ?></a>
</div>
<footer style="height: 20px; background-color:#F7C201;">
<a><?php echo("<button onclick=\"location.href='cancel.php'\">CANCEL ORDER</button>"); ?></a>
  
</footer>
    
</body>
</html>
