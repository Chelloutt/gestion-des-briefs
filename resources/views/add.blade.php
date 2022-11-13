<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <title>Document</title>
</head>

<body>
    <form action="/insert" method="get">
        <div>
            <input type="text" name="name" autocomplete="off" placeholder="entre votre promotion">
            <input type="submit" value="ajouter">
        </div>
    </form>
</body>

</html>
