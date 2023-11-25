<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/view/assets/png/logo-no-background.png">
    <link rel="stylesheet" href="/view/css/notLoggedIn/style.css" type="text/css" />

    <?php addCSSLink($styleFilePath); ?>

    <title>Digital bank</title>
</head>

<body>
    <nav>
        <div class="container nav">
            <picture>
                <a href="/">
                    <img src="/view/assets/png/logo-no-background.png" alt="logo" />
                </a>
            </picture>

            <div class="acessLink">
                <a href="/signup">Sign Up</a>
                <a href="/login">Log In</a>
            </div>
        </div>
    </nav>

    <main>
        <div class="container main">
            <?php include $pagePath; ?>
        </div>
    </main>

    <footer class="container footer">
        <p>Developed by <a href="https://github.com/Julyo-Hidalgo/" target="_blank"><span class="footerLink">Julyo
                    Hidalgo</span></a></p>
    </footer>
</body>

</html>