<html lang="en">

<head>

	<meta charset="utf-8" />
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

	<div class="container main">
		<div class="row">

			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item active"><a href="#">Pending Tasks</a></li>
					<li class="list-group-item"><a href="new-item.php">New Task</a></li>
					<li class="list-group-item"><a href="list-items.php">All Tasks</a></li>
				</ul>
			</div>

			<div class="col-md-9">
				<div class="container box">
					<div class="row">
						<div class="col">

							<h4>P E N D I N G&nbsp;&nbsp;&nbsp;&nbsp;T A S K S</h4>
							<hr>
							<div class="row mb-3 d-flex align-items-center">
								<div class="col-sm-9">Lorem ipsum</div>
								<div class="col-sm-3 mt-2 d-flex justify-content-between">
									<i class="fas fa-trash-alt fa-lg text-danger"></i>
									<i class="fas fa-edit fa-lg text-info"></i>
									<i class="fas fa-check-square fa-lg text-success"></i>
								</div>
							</div>

							<div class="row mb-3 d-flex align-items-center">
								<div class="col-sm-9">Lorem ipsum</div>
								<div class="col-sm-3 mt-2 d-flex justify-content-between">
									<i class="fas fa-trash-alt fa-lg text-danger"></i>
									<i class="fas fa-edit fa-lg text-info"></i>
									<i class="fas fa-check-square fa-lg text-success"></i>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</body>

</html>
