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
    <form action="/" method="put">
        @csrf
        <input type="hidden" name="_method">
        <input type="text" name="userName">
        <button type="submit">Submit</button>
    </form>
</body>
</html>