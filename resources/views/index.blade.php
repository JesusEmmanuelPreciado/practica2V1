<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Catálogos</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #main-content {
            display: flex;
            flex-direction: column;
            min-height: 100%;
        }

        footer {
            margin-top: auto;
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            width: 100%;
        }

        footer a {
            margin: 0 10px;
            text-decoration: none;
            color: #007bff;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="main-content">
        @include("menuIni")
        @guest
        <footer>
            <a href="https://developer.mozilla.org/es/docs/Web/JavaScript" target="_blank">JScript</a>
            <a href="https://developer.mozilla.org/es/docs/Web/HTML/Element/html " target="_blank">HTML</a>
            <a href="https://developer.mozilla.org/es/docs/Learn/Getting_started_with_the_web/CSS_basics" target="_blank">CSS</a>
            <a href="https://www.php.net/manual/es/intro-whatis.php" target="_blank">PHP</a>
            <a href="https://laravel.com" target="_blank">LARAVEL</a>
        </footer>
        @endguest
    </div>
</body>
</html>
