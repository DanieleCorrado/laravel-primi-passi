<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
</head>

<body>
    <h1> Hello World!</h1>

    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="contact">Contact</a></li>
    </ul>
</body>

</html>
