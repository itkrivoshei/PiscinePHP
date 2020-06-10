<?php
    class Targaryen {
    public function resistsFire() {
        return false;
    }
    public function getBurned() {
        if ($this->resistsFire() === true)
            return "emerges naked but unharmed";
        return "burns alive";
    }
}