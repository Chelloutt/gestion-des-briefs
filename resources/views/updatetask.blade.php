<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        input{
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
        @foreach ($data as $item)

            <form action="/edittask/{{$item->id}}"  method="get">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" value="{{$item->name}}">

            <label for="description">Description </label>
            <input type="text" id="description" name="description"value="{{$item->description}}">

            <label for="start_date">Date de livraison</label>
            <input type="text" id="start_date" name="start_date" value="{{$item->start_date}}">

            <label for="end_date">Date de recepuration </label>
            <input type="text" id="end_date" name="end_date" value="{{$item->end_date}}">

            <input type="submit" value="confirmer">

          @endforeach
        </form>
      </div>
</body>
</html>
