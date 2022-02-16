<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Livin Fresh</title>
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
  background-image: url(Homepage.png);
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


    <span class="border">YOUR ORDER IS CANCELLED</span><br>



  <form class=""action="cancel_order.php"method="post">
  <p class="body" align="center">REASON FOR CANCELLATION</p>
    <div class="main">
        <p class="sign" align="center"><br></br>
     <br> <label for="Reason">Reason</label>
     <input type="un" name="reason" type="text" value=""></br>
    <br> <label for="">Feedback</label>
      <input type="feedback" name="queries"type="text"value=""></br>
     <br> <button type="submit" class="submit" class="btn" name="log">Submit</button></br></p>
    
    </div>
  </form>
  </div>
</div>

</body>
</html>
