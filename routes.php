<?php

function mountPage(string $pagePath, $filePath = null)
{
    include 'templates/notLoggedInTemplate.php';
}

function addCSSLink($filePath = null)
{
    if (!$filePath == null) echo '<link rel="stylesheet" href=' . $filePath . ' type="text/css" />';
}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri == '/') mountPage(HOME_PAGE_PATH, HOME_PAGE_PATH);

if ($uri == '/login') mountPage(LOGIN_PAGE_PATH, LOGIN_STYLE_PATH);

if ($uri == '/signup') mountPage(SIGNUP_PAGE_PATH);
