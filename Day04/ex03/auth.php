<?php
    function auth($login, $passwd) {
        if (!$login || !$passwd)
            return false;
        $acc = unserialize(file_get_contents("../private/passwd"));
        if ($acc) {
            foreach ($acc as $key => $value)
                if ($value["login"] === $login && $value["passwd"] === hash("whirlpool", $passwd))
                    return true;
        }
        return false;
    }