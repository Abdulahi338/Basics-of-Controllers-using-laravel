<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
</head>
<body>
    <form action="/" method="post">
        @csrf
        <input type="text" name="userName">
        <button type="submit">Submit</button>
    </form>
    <form action="/2" method="post">
        @csrf
        @method('put')
        <input type="text" name="userName" id="">
        <button type="submit">Submit put</button>
    </form>
    <form action="/200" method="post">
        @csrf
        @method('delete')
        <input type="text" name="userName" id="">
        <button type="submit">Submit put</button>
    </form>
</body>
</html>