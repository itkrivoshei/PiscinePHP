<?php
    if($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK") {
        if (!file_exists('../private'))
            mkdir("../private");
        if (!file_exists('../private/passwd'))
            file_put_contents('../private/passwd', null);
        $acc = unserialize(file_get_contents('../private/passwd'));
        if ($acc) {
            foreach ($acc as $key => $value) {
                $has = 0;
                if ($value["login"] === $_POST["login"])
                    $has = 1;
            }
        }
        if ($has) {
            echo "ERROR\n";
        } else {
            $tmp["login"] = $_POST["login"];
            $tmp["passwd"] = hash("whirlpool", $_POST["passwd"]);
            $acc[] = $tmp;
            file_put_contents("../private/passwd", serialize($acc));
            echo "OK\n";
        }
    } else
        echo "ERROR\n";
?>