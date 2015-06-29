<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "utf-8"/>
		<title>Edit User</title>
		<meta name = "description" content="DESCRIPTIONHERE"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<!-- link to custom local css -->
		<link rel="stylesheet" type="text/css" href="/assets/style_edit_user.css">
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
					<li class="sign_in_link"><a href="">Log Off</a></li>
				</ul>
			</div>
		</nav>
		<div class="row">
			<div class="col-xs-4 col-xs-offset-3 col-sm-4 col-sm-offset-3 col-md-4 col-md-offset-3">
				<h3>Edit User</h3>
			</div>
			<div class="col-xs-2 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1">
				<form action="" method='post'>
					<input type="submit" value='Return to Dashboard'>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-3 col-md-3 col-md-offset-3">
				<div class="edit_info">
					<h4>Edit Information</h4>
					<form action="" method="post">
						<div class="row">
							<label for="email">Email</label><br>
							<input type="email" name='email'>
						</div>
						<div class="row">
							<label for="first_name">First Name</label><br>
							<input type="text" name='first_name'>
						</div>
						<div class="row">
							<label for="last_name">Last Name</label><br>
							<input type="text" name='last_name'>
						</div>
						<div class="row">
							<input type="submit" value="Save">
						</div>
						<div class="row">
							<label>User Level</label><br>
							<select>
								<option value="normal">Normal</option>
								<option value="admin">Admin</option>
							</select>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-1">
				<div class="edit_password">
					<h4>Change Password</h4>
					<form action="" method="post">
						<div class="row">
							<label for="password">Password</label><br>
							<input type="password" name='password'>
						</div>
						<div class="row">
							<label for="passconf">Password Confirmation</label><br>
							<input type="password" name='passconf'>
						</div>
						<div class="row">
							<input type="submit" value="Update Password">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-7 col-xs-offset-3 col-sm-7 col-sm-offset-3 col-md-7 col-md-offset-3">
				<div class="edit_description">
					<h4>Edit Description</h4>
					<form action="" class="form-group" method="post">
						<div class="row">
							<textarea name="description" class='form-control' cols="30" rows="5"></textarea>
						</div>
						<div class="row">
							<input type="submit" value="Save" class='update_description'>
						</div>
					</form>
				</div>
			<div>
		</div>
	</body>
</html>

