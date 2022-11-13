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



    <div>
        <form action="/edit-app/{{ $apprenant[0]->promotionID }}" method="get">

            <input type="text" name="name" value="{{ $apprenant[0]->first_name }}">
            <input type="text" name="last" value="{{ $apprenant[0]->last_name }}">
            <input type="text" name="email" value="{{ $apprenant[0]->email }}">
            <input type="hidden" name="id_promo" value="{{ $apprenant[0]->id }}">

            <input type="submit" value="confirmer">
        </form>
    </div>
</body>

</html>
