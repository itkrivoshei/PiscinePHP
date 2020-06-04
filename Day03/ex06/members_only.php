<?php
    $usr = $_SERVER["PHP_AUTH_USER"];
    $pas = $_SERVER["PHP_AUTH_PW"];
    if (!$pas || !$usr || $usr != "zaz" || ($pas != "Ilovemylittleponey" && $pas != "jaimelespetitsponeys")) {
        header("HTTP/1.0 401 Unauthorized");
        header('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
        echo "<html><body>That area is accessible for members only</body></html>"."\n";
        exit;
    }   else {
        $img = file_get_contents("../img/42.png");
        echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,".base64_encode($img)."'>\n</body></html>\n";
    }