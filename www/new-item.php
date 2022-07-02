<html lang="en">

<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>O W L N O T E</title>
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- FONT AWESOME -->
	<script src="https://kit.fontawesome.com/e46ee4d785.js" crossorigin="anonymous"></script>

</head>

<body>

	<?php include('pattern/header.php') ?>

	<?php if( isset($_GET['success']) && $_GET['success'] == 1 ) { ?>
		<div class="pt-2 text-white bg-success d-flex justify-content-center">
			<h3>Note successfully registered.</h3>
		</div>
	<?php } ?>

	<div class="container main">
		<div class="row">

			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="index.php">Pending Tasks</a></li>
					<li class="list-group-item active"><a href="#">New Task</a></li>
					<li class="list-group-item"><a href="list-items.php">All Tasks</a></li>
				</ul>
			</div>

			<div class="col-md-9">
				<div class="container box">
					<div class="row">
						<div class="col">

							<h4>N E W&nbsp;&nbsp;&nbsp;&nbsp;T A S K</h4>
							<hr>
							<form method="POST" action="public-controller.php?new=insert">
								<div class="form-group">
									<label>Task title:</label>
									<input type="text" name="task-item" class="form-control" placeholder="Ex: Have lunch">
								</div>
								<button class="btn btn-success">Register</button>
							</form>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</body>

</html>
