<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/submit" method="POST">
        @csrf
        Name: <input type="text" name="name"><br/><br/>
        Password: <input type="password" name="password"><br/><br/>
        <button>submit</button>
</body>
</html>