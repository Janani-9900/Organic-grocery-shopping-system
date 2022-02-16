<title>Livin Fresh</title>
<div class="login-wrap">
	<div class="login-html">
    <link rel="stylesheet" href="loginstyle.css">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="form-group">
					<form action="connect.php" method="POST">
				
					<label for="username" class="label">Username</label>
					<input id="username" type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label for="password" class="label">Password</label>
					<input id="password" type="password" class="form-control" type="password" name="password">
				</div>
				
				<div class="form-group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
				</form>
				</div>
			</div>
			<form action="login.php" method="POST">
			
			<div class="sign-up-htm">
				<div class="form-group">
					<label for="username" class="label">Username</label>
					<input id="username" type="text" class="form-control"name="username">
				</div>
				<div class="form-group">
					<label for="password" class="label">Password</label>
					<input id="password" type="password" class="form-control" type="password" name="password">
				</div>
				<div class="form-group">
					<label for="Email" class="label">Email Address</label>
					<input id="Email" type="email" class="form-control"name="email">
				</div>
				<div class="form-group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
