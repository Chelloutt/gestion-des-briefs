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
            <table>
                <tr>

                    <th> Nom  </th>
                    <th> Email  </th>
                    <th> Promotion  </th>
                    <th> Actions </th>
                </tr>
                @foreach ($apprenants as $item)

                <tr>
                    <td>{{ $item->first_name }} </td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->id_promo }} </td>

                    <td>
                    <a  href="{{ $id }}/assignerAuApprenant/{{ $item->id }}">Assigner </a>
                    <a  href="{{ $id }}/desassignerAuApprenant/{{ $item ->id }}">Desasigner </a>
                    </td>
                </tr>
                @endforeach

        </table>
        </div>

</body>
</html>
