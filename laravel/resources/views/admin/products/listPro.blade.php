<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$tittle}}</h1>
    <table>
        <tr>
            <th>name</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($listProduct as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->name}}</td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>