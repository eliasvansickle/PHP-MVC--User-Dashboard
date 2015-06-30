<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "utf-8"/>
		<title>Show User</title>
		<meta name = "description" content="DESCRIPTIONHERE"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<!-- link to custom local css -->
		<link rel="stylesheet" type="text/css" href="/assets/style_show_user.css">
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
					<li class="dashboard_link"><a href="/main/dashboard">Dashboard</a></li>
					<li class="profile_link"><a href="/main/profile">Profile</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="sign_in_link"><a href="/main/logoff">Log Off</a></li>
				</ul>
			</div>
		</nav>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1  jumbotron">
				<h3>Michael Choi</h3>
				<p>Registered at: December 24th 2012</p>
				<p>User ID: # 1</p>
				<p>Email Address: michael@blabal.com</p>
				<p>Registered at: December 24th 2012</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
				<form class='form-group' action="" method='post'>
					<label>
						<h5>Leave a message for Michael</h5>
						<textarea name="message" class='form-control' cols="114" rows="5" placeholder='write a message'></textarea>
						<input type="submit" class='post_message' value='post'>
					</label>
				</form>
			</div>	
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
				<label>
					<div class="row">
						<div class="col-xs-10 col-sm-10 col-md-10">
							<h5>Mark Guillen wrote</h5>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2">
							<em>7 hours ago</em>
						</div>
					</div>
					<textarea name="message" class='form-control' cols="114" rows="3">MESSAGE EXAMPLE</textarea>
				</label>
			</div>	
		</div>
		<div class="row">
			<div class="col-xs-9 col-xs-offset-2 col-sm-9 col-sm-offset-2 col-md-9 col-md-offset-2">
				<label>
					<h5><a href="">Mark Guillen</a> wrote</h5>
					<textarea name="posted_comment" class='form-control' cols="100" rows="2">COMMENT EXAMPLE</textarea>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-9 col-xs-offset-2 col-sm-9 col-sm-offset-2 col-md-9 col-md-offset-2">
				<textarea name="comment" class='form-control' cols="100" rows="2" placeholder='write a comment'></textarea>
				<input type="submit" class='post_message' value='post'>
			</div>
		</div>
	</body>
</html>



















