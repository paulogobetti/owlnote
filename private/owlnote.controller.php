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

        header('Location: new-item.php?success=1');

    }

    else if($action == 'list') {

        $task = new Task();

        $connection = new Connection();

        $taskTools = new TaskTools($connection, $task);
        $tasks = $taskTools->recover();

    }

    else if($action == 'update') {

        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

    }
