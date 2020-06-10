<?php
    class NightsWatch implements IFighter {
        public function recruit($point) {
            if ($point instanceof IFighter)
                $point->fight();
        }
        public function fight() {
        }
    }