<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP INFO</title>
</head>

<body>
    <header>
        <h1 style="text-align:center">PHP INFO</h1>
        <p style="text-align:center">Here's the most famous script to start learning PHP. This function outputs a large amount of information about the current state of PHP (compilation options and extensions, version, server information and environment, OS version information, paths, master and local values of configuration options, HTTP headers, and the PHP License).</p>
        <p style="text-align:center">Because every system is setup differently, phpinfo() is commonly used to check configuration settings and for available predefined variables on a given system.It's also a valuable debugging tool as it contains all EGPCS (Environment, GET, POST, Cookie, Server) data. Source: <a href="https://www.php.net/manual/en/function.phpinfo.php">https://www.php.net/manual/en/function.phpinfo.php</a></p>
    </header>
    <main>
        <?php
        phpinfo();
        ?>
    </main>
    <footer>
        <p style="text-align:center">Copyright © 2024 Kalypso'attempt to learn PHP - All rights reserved</p>
    </footer>

</body>

</html>