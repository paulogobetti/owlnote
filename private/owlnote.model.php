<?php

    class Task {

        private $id;
        private $taskStatus;
        private $task;
        private $registerDate;

        public function __get($attribute) {
            return $this->$attribute;
        }

        public function __set($attribute, $value) {
            $this->$attribute = $value;
        }

    }
