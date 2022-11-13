<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Document</title>
</head>

<body>
    <form action="/insertbrief" method="get">

        <div>

            <label for="fname">Nom de brief</label>
            <input type="text" id="fname" name="name" placeholder="Your name.." autocomplete="off">

            <label for="lname">date de livraison</label>
            <input type="date" id="lname" name="date_de_livraison" placeholder="Your last name.." autocomplete="off">

            <label for="lname">date de récupération</label>
            <input type="date" id="lname" name="date_de_récupération" placeholder="Your last name.." autocomplete="off">

            <input type="submit" value="ajouter">

        </div>


    </form>
</body>

</html>
