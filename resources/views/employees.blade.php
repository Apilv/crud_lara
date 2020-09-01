<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
    @foreach ($key as $value)
        <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['name']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>