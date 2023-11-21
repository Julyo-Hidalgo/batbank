<?php

function mountPage(string $pagePath) {
    include 'template.php';
}


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri == '/') mountPage(HOME);

if ($uri == '/login') mountPage(LOGIN);

if ($uri == '/signup') mountPage(SIGNUP);

?>