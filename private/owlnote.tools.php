<?php

    class TaskTools {

        public $connection;
        public $task;

        public function __construct(Connection $connection, Task $task) {

            $this->connection = $connection->connect();
            $this->task = $task;

        }

        public function insert() {

            $query = 'INSERT INTO app_tasks(task) VALUES(:task)';
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':task', $this->task->__get('task'));
            $stmt->execute();

        }

        public function recover() {

            $query = 'SELECT t.id, s.status, t.task
                      FROM app_tasks AS t
                      LEFT JOIN app_status AS s ON (t.task_status = s.id)
                     ';
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }

        public function update() {

            $query = 'UPDATE app_tasks SET task = :task WHERE id = :id';
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':task', $this->task->__get('task'));
            $stmt->bindValue(':id', $this->task->__get('id'));
            return $stmt->execute();

        }

        public function remove() {

            $query = 'DELETE FROM app_tasks WHERE id = :id';
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':id', $this->task->__get('id'));
            $stmt->execute();

        }

        public function markComplete() {

            $query = 'UPDATE app_tasks SET task_status = :task_status WHERE id = :id';
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':task_status', $this->task->__get('task_status'));
            $stmt->bindValue(':id', $this->task->__get('id'));
            return $stmt->execute();

            header('location: list-items.php');

        }

        // public function listPendingTasks() {

        //     $query = 'SELECT t.id, s.status, t.task
        //               FROM app_tasks AS t
        //               LEFT JOIN app_status AS s ON (t.task_status = s.id)
        //              ';
        //     $stmt = $this->connection->prepare($query);
        //     $stmt->execute();
        //     return $stmt->fetchAll(PDO::FETCH_OBJ);

        // }

        public function pendingTasksRecover() {

            $query = 'SELECT t.id, s.status, t.task
                      FROM app_tasks AS t
                      LEFT JOIN app_status AS s ON (t.task_status = s.id)
                      WHERE t.task_status = :task_status
                     ';
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(':task_status', $this->task->__get('task_status'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }

    }
