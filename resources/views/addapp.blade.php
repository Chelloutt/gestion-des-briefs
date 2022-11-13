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
    <form action="/insertapp" method="get">

        <div>

            <label for="fname">Nom </label>
            <input type="text" id="fname" name="name" placeholder="Your name..">

            <label for="lname">Prenom</label>
            <input type="text" id="lname" name="last" placeholder="Your last name..">

            <label for="lname">email</label>
            <input type="email" id="lname" name="email" placeholder="Your last name..">

            <input type="hidden" name="idapp" value="{{ $id }}">



            <input type="submit" value="ajouter">

        </div>


    </form>
</body>

</html>
