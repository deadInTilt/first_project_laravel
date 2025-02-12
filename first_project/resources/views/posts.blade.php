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
        @foreach($posts as $post)
            <div> {{ $post->title }} </div>
        @endforeach
    </div>
</body>
</html>