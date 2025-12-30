<?php

setcookie("style[color]", "blue", time() + 60 * 60 * 24 * 65, "/");
setcookie("style[font]", "Swat", time() + 60 * 60 * 24 * 65, "/");
setcookie("style[layout]", "boxed", time() + 60 * 60 * 24 * 65, "/");


setcookie("style[layout]", "boxed", time() - 3600., "/");


setcookie("style[color]", "blue", 0, "/");
setcookie("style[font]", "Swat", 0, "/");



if (isset($_COOKIE["style"])) {
    var_dump($_COOKIE["style"]);
    print "Your Color Is " . $_COOKIE["style"]["color"] . " And Your Font Is " . $_COOKIE["style"]["font"];
}

