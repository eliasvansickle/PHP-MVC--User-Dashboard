<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "utf-8"/>
		<title>New User</title>
		<meta name = "description" content="DESCRIPTIONHERE"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<!-- link to custom local css -->
		<link rel="stylesheet" type="text/css" href="/assets/style_sign_in.css">
		<!-- link to remote css bootstrap library -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- link to remote js bootstrap library -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!-- Bootstrap Theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- link to remote google jquery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- link to jQuery UI remote css -->
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<!-- link to remote google jQuery UI library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<!-- link to custom local jquery -->
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar navbar-brand">
					<p>Test App</p>
				</div>
				<ul class='nav navbar-nav navbar-left'>
					<li class="dashboard_link"><a href="/main/admin_dashboard">Dashboard</a></li>
					<li class="profile_link"><a href="/main/profile">Profile</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="sign_in_link"><a href="/main/sign_in">Sign In</a></li>
				</ul>
			</div>
		</nav>
		<div class="row">
			<div class="col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-6 col-md-offset-1">
				<h4>Add a new user</h4>
				<?= $this->session->flashdata('create_user_errors'); ?>
				<?= $this->session->flashdata('successful_add'); ?>
				<form action="/users/create_new_user" method="post">
					<div class="row">
						<input type="email" name='email' placeholder='Email Address'>
					</div>
					<div class="row">
						<input type="text" name='first_name' placeholder='First Name'>
					</div>
					<div class="row">
						<input type="text" name='last_name' placeholder='Last Name'>
					</div>
					<div class="row">
						<input type="password" name='password' placeholder='Password'>
					</div>
					<div class="row">
						<input type="password" name='passconf' placeholder='Password Confirmation'>
					</div>
					<div class="row">
						<input type="submit" value="Create">
					</div>
				</form>
			</div>
			<div class="col-xs-3 col-xs-offset-1 col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-1">
				<form action="/main/admin_dashboard" method='post'>
					<input type="submit" value='Return to Dashboard'>
				</form>
			</div>
		</div>
	</body>
</html>

