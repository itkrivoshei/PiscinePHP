<?php
    abstract class Fighter {
        abstract public function fight($target);
        private $point;
        public function __construct($class_name) {
            return $this->point = $class_name;
        }
        public function getClassStr() {
            return $this->point;
        }
    }