<?php

function mountPage(string $pagePath, $styleFilePath = null)
{
    include 'templates/notLoggedInTemplate.php';
}

function addCSSLink($styleFilePath = null)
{
    if (!$styleFilePath == null) echo '<link rel="stylesheet" href=' . $styleFilePath . ' type="text/css" />';
}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri == '/') mountPage(HOME_PAGE_PATH, HOME_STYLE_PATH);

if ($uri == '/login') mountPage(LOGIN_PAGE_PATH, LOGIN_STYLE_PATH);

if ($uri == '/signup') mountPage(SIGNUP_PAGE_PATH);
