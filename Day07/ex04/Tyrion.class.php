<?php
    class Tyrion {
        public function sleepWith($point) {
            if ($point instanceof Jaime)
                print("Not event if I'm drunk !".PHP_EOL);
            else if ($point instanceof Sansa)
                print("Let's do this.".PHP_EOL);
            else if ($point instanceof Cersei)
                print("Not event if I'm drunk !".PHP_EOL);
        }
    }