<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts view</title>
</head>
<body>
    <h1>Hello from Posts...</h1>
    {{date('y-m-d')}}
    <div>My name is {{ $userName }} and I am {{ $age }} years old</div>
    <ul>
        {{-- <li>{{$post[0]}}</li>
        <li>{{$post[1]}}</li>
        <li>{{$post[2]}}</li> --}}
        @foreach ( as )
            
        @endforeach
    </ul>
</body>
</html>
