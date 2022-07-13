<?php

    require '../private/owlnote.model.php';
    require '../private/owlnote.tools.php';
    require '../private/owlnote.config.php';

    $action = isset($_GET['new']) ? $_GET['new'] : $action;

    if($action == 'insert') {

        $task = new Task();
        $task->__set('task', $_POST['task-item']);

        $connection = new Connection();

        $taskTools = new TaskTools($connection, $task);
        $taskTools->insert();

        header('location: new-item.php?success=1');

    }

    else if($action == 'list') {

        $task = new Task();

        $connection = new Connection();

        $taskTools = new TaskTools($connection, $task);
        $tasks = $taskTools->recover();

    }

    else if($action == 'update') {

        $task = new Task();
        $task->__set('id', $_POST['id']);
        $task->__set('task', $_POST['task']);

        $connection = new Connection();

        $taskTools = new TaskTools($connection, $task);

        if($taskTools->update()) {

            header('location: list-items.php');

        }

    }

    else if($action == 'remove') {

        $task = new Task();
        $task->__set('id', $_GET['id']);

        $connection = new Connection();

        $taskTools = new TaskTools($connection, $task);
        $taskTools->remove();

        header('location: list-items.php');

    }

    else if($action == 'complete') {

        $task = new Task();
        $task->__set('id', $_GET['id']);
        $task->__set('task_status', 2);

        $connection = new Connection();

        $taskTools = new TaskTools($connection, $task);
        $taskTools->markComplete();

        header('location: list-items.php');

    }

    else if($action == 'pendingTasksRecover') {

        $task = new Task();
        $task->__set('task_status', 1);

        $connection = new Connection();

        $taskTools = new TaskTools($connection, $task);
        $tasks = $taskTools->pendingTasksRecover();

    }
