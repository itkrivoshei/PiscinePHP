<?php
    if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] && $_POST["submit"] === "OK") {
        if (!file_exists('../private'))
            mkdir("../private");
        if (!file_exists('../private/passwd'))
            file_put_contents('../private/passwd', null);
        $acc = unserialize(file_get_contents("../private/passwd"));
        if ($acc) {
            $has = 0;
            foreach ($acc as $key => $value) {
                if ($value["login"] === $_POST["login"] && $value["passwd"] === hash("whirlpool", $_POST["oldpw"])) {
                    $has = 1;
                    $acc[$key]["passwd"] =  hash("whirlpool", $_POST["newpw"]);
                }
            }
            if ($has) {
                file_put_contents("../private/passwd", serialize($acc));
                header('Location: index.html');
                echo "OK\n";
            } else
                echo "ERROR\n";
        } else
            echo "ERROR\n";
    } else
        echo "ERROR\n";
?>