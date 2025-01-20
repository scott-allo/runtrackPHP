<?php

function getHello() {
    return "Hello LaPlateforme!";
}

$message = getHello();

if (isset($message)) {
    echo $message;
}

