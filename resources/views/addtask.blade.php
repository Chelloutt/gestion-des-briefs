<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div>
        <form action="/newtask" method="get">

            <label for="fname">nom</label>
            <input type="text" id="fname" name="name" autocomplete="off">


            <label for="lname">description</label>
            <input type="text" id="lname" name="description" autocomplete="off">

            <label for="lname">date de livraison</label>
            <input type="date" id="lname" name="start_date" autocomplete="off">

            <label for="lname">date de livraison</label>
            <input type="date" id="lname" name="end_date" autocomplete="off">

            <input type="hidden" name="briefs_id" value="{{ $id }}">

            <input type="submit" value="ajouter">
        </form>
    </div>
</body>

</html>
