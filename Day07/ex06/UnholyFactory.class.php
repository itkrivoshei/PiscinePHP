<?php
    class UnholyFactory {
        private $arr = array();
        public function absorb ($point) {
            if ($point instanceof Fighter)
            {
                if (array_key_exists($point->getClassStr(), $this->arr))
                    print("(Factory already absorbed a fighter of type ");
                else {
                    print("(Factory absorbed a fighter of type ");
                    $this->arr[$point->getClassStr()] = $point;
                }
                print($point->getClassStr().")".PHP_EOL);
            }
            else
                print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
        }
        public function fabricate($point) {
        if (array_key_exists($point, $this->arr)) {
            print("(Factory fabricates a fighter of type ".$point.")".PHP_EOL);
            return (clone $this->arr[$point]);
        } else
                print("(Factory hasn't absorbed any fighter of type ".$point.")".PHP_EOL);
        return false;
        }
    }