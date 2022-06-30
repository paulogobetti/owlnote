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
            
            // $query = 'SELECT id, task_status, task FROM app_tasks';
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }

        public function update() {

        }

        public function remove() {

        }

    }
