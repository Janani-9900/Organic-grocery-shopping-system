<title>Livin Fresh</title>
<?php
session_start();
$host = "localhost:3307";
$username = "root";
$password = "root@123";
$db = "livinfresh";

// Create connection
$con = mysqli_connect($host, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

                         
?>

<style>

.form-group {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.form-group {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.form-group {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.form-group {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.form-group {
  padding: 0 16px;
}

.form-group {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.form-group {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.form-group ,.h1{
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.form-group {
  background-color: #45a049;
}



hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .form-group {
    flex-direction: column-reverse;
  }
  .form-group {
    margin-bottom: 20px;
  }
}
</style>
<h1>Billing Address </h1>

<form action="checkout.php" method="POST">
			<div class="sign-up-htm">
				<div class="form-group">
					<label for="firstname" class="label">Firstname</label>
					<input id="firstname" type="text" class="form-control"name="firstname">
				</div>
				<div class="form-group">
					<label for="email" class="label">Email</label>
					<input id="email" type="email" class="form-control" type="email" name="email">
				</div>
				<div class="form-group">
					<label for="address" class="label">Address</label>
					<input id="address" type="text" class="form-control" type="address" name="address">
				</div>
				<div class="form-group">
					<label for="city" class="label">City</label>
					<input id="city" type="text" class="form-control"name="city">
				</div>
				<div class="form-group">
					<label for="state" class="label">State</label>
					<input id="state" type="text" class="form-control"name="state">
				</div>
				<div class="form-group">
					<label for="zip" class="label">Zip-Code</label>
					<input id="zip" type="text" class="form-control"name="zip">
				</div>
				<div class="form-group">
					<input type="submit" class="btn" value="Place Order">
				</div>
				
			</form>