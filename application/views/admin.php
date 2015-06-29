<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "utf-8"/>
		<title>Admin</title>
		<meta name = "admin" content="Admin"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<!-- link to custom local css -->
		<link rel="stylesheet" type="text/css" href="/assets/style_admin.css">
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
					<li class="home_link"><a href="">Dashboard</a></li>
					<li class="home_link"><a href="">Profile</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="sign_in_link"><a href="">Log Off</a></li>
				</ul>
			</div>
		</nav>
		<div class="row">
			<div class="col-xs-6 col-xs-offset-2 col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-2">
				<h4>Manage Users</h4>
			</div>
			<div class='col-xs-1 col-sm-1 col-md-1'>
				<form action="" method='post'>
					<input type="submit" value='Add new'>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="container-fluid table-container">	
				<table class="table">
					<thead>
						<th>id</th>
						<th>name</th>
						<th>email</th>
						<th>created_at</th>
						<th>user_level</th>
						<th>actions</th>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>
								<a href="">Michael Choi</a>
							</td>
							<td>michael@village60606.com</td>
							<td>dec 24th 2012</td>
							<td>admin</td>
							<td>
								<a href="">edit</a>
								<a href="">remove</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>

