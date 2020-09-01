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
            <th>Deadline</th>
        </tr>
    @foreach ($projects as $value)
        <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['project_name']}}</td>
        <td>{{$value['deadline']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>