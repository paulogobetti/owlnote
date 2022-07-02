<?php

	$action = 'list';
	require 'public-controller.php';

?>

<!DOCTYPE HTML>

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
	<script>

		function edit(id, taskPlaceholder) {
			
			const form = document.createElement('form')
			form.action = 'public-controller.php?new=update'
			form.method = 'POST'
			form.className = 'row'

			const inputTask = document.createElement('input')
			inputTask.type = 'text'
			inputTask.name = 'task'
			inputTask.className = 'col-6 mr-4 form-control'
			inputTask.value = taskPlaceholder

			const inputId = document.createElement('input')
			inputId.type = 'hidden'
			inputId.name = 'id'
			inputId.value = id

			const button = document.createElement('button')
			button.type = 'submit'
			button.className = 'col-4 btn btn-success'
			button.innerHTML = 'Update'

			form.appendChild(inputTask)
			form.appendChild(inputId)
			form.appendChild(button)

			const task = document.getElementById('task-' + id)

			task.innerHTML = ''

			task.insertBefore(form, task[0])

		}

	</script>

</head>

<body>

	<?php include('pattern/header.php') ?>

	<div class="container main">
		<div class="row">

			<div class="col-sm-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="index.php">Pending Tasks</a></li>
					<li class="list-group-item"><a href="new-item.php">New Task</a></li>
					<li class="list-group-item active"><a href="#">All Tasks</a></li>
				</ul>
			</div>

			<div class="col-sm-9">
				<div class="container box">
					<div class="row">
						<div class="col">

							<h4>A L L&nbsp;&nbsp;&nbsp;&nbsp;T A S K S</h4>
							<hr>
							<?php foreach($tasks as $taskItem => $task) { ?>
								<div class="row mb-3 d-flex align-items-center">
									<div class="col-sm-9" id="task-<?= $task->id ?>">
										<?= $task->task ?> (<?= $task->status ?>)
									</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i>
										<i class="fas fa-edit fa-lg text-info" onclick="edit(<?= $task->id ?>, '<?= $task->task ?>')"></i>
										<i class="fas fa-check-square fa-lg text-success"></i>
									</div>
								</div>
							<?php } ?>
							
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</body>

</html>
