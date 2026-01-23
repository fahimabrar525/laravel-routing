<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <h1>Welcome to Laravel</h1>

    <form method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name"><br/>
        <input type="email" name="email" placeholder="Enter your email"><br/>
        <button type="submit">Submit</button>   
    </form>
</body>
</html>