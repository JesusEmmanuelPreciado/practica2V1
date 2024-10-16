<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Welcome</title>
</head>
<style>
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
<body>
    @include('menuTemp')
    @yield('section')
    <footer>
        @auth
            <li style="margin-left:10px; margin-top:8px">{{Auth::user()->name}}</li>
            <li style="margin-left:10px; margin-top:8px">{{Auth::user()->email}}</li> 
        @endauth
    </footer>
</body>
</html>