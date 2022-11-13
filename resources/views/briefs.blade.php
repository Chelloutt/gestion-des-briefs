<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        nav {
            background-color: #979595;
            height: 50px;
            width: 100%;
        }

        #search {
            display: flex;
            float: right;
            width: 200px;
            height: 25px;
            border: 1px solid #979595;
            border-radius: 7px;
            margin-right: 30px;
            margin-top: 10px;
        }

        #search::placeholder {
            font-style: italic;
        }

        #briefs {
            margin-left: 30px;
            text-decoration: none;
            font-size: 1.8rem;
            color: aliceblue;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <nav>
        <a id="briefs" href="index">Promotions</a>
        <input type="text" id="search" name="search" placeholder="search" autocomplete="off">
    </nav>


    <center>
        <h1>list des briefs</h1>
    </center>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">date de livraison</th>
                <th scope="col">date récupération</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->date_de_livraison }}</td>
                    <td>{{ $item->date_de_récupération }}</td>
                    <td>
                        <a href="/updatebrief/{{ $item->id }}"> <button type="button"
                                class="btn btn-success">modfiier</button></a>
                        <a href="/delete_brief?id={{ $item->id }}"><button type="button"
                                class="btn btn-danger">supprimer</button></a>
                        <a href="/assinger/{{ $item->id }}"><button type="button"
                                class="btn btn-info">assinger</button></a>



                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <a href="addbrief"><button type="button" class="btn btn-primary">Ajouter un brief</button></a>
</body>

</html>
