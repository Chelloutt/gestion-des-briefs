<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        #taskbtn {
            background-color: #251fdc;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #taskbtn:hover {
            background-color: #4815bf;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <form action="/editbrief/{{ $briefs[0]->id }}" method="get">

        @csrf


        <div>

            <label for="fname">Nom</label>
            <input type="text" name="name" value="{{ $briefs[0]->name }}" autocomplete="off">

            <label for="lname">date de livraison</label>
            <input type="text" name="date_de_livraison" value="{{ $briefs[0]->date_de_livraison }}" autocomplete="off">

            <label for="lname">date de récupération</label>
            <input type="text"  name="date_de_récupération" value="{{ $briefs[0]->date_de_récupération }}" autocomplete="off">

            <input type="submit" value="confirmer"><br><br>
            <a id="taskbtn" href="/addtask/{{ $briefs[0]->id }}">ajouter une tâche</a>
    </form>
    </div>

    <center>
        <h1>list des tâches</h1>
    </center>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">start date</th>
                <th scope="col">end date</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alltasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <th scope="row">{{ $task->name }}</th>
                    <th scope="row">{{ $task->description }}</th>
                    <th scope="row">{{ $task->start_date }}</th>
                    <th scope="row">{{ $task->end_date }}</th>
                    <th>
                        <a href="/updatetask/{{ $task->id }}">modifier</a>
                        <a href="/deletetask/{{ $task->id }}">supprimer</a>


                    </th>

                </tr>
            @endforeach
        </tbody>
    </table>





</body>

</html>
