<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint"
        content="width=devie-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Cmpatible" content="ie=edge">
    <title>Documents</title>    
</head>
<body>
<div>
    <div>
        <nav>
            <ul>
                <li><a href="{{ route('post.main') }}">Main</a></li>
                <li><a href="{{ route('post.index') }}">Posts</a></li>
                <li><a href="{{ route('post.about') }}">About</a></li>
                <li><a href="{{ route('post.contacts') }}">Contacts</a></li>
            </ul>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>