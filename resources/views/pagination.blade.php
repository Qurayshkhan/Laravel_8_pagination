<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pagination</title>
</head>
<body>
    <table style="border:2px" width=100%>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Marks</th>
            <th>Date</th>
        </tr>

@foreach ($students as $stu)
<tr>
    <td>{{$stu->id}}</td>
    <td>{{$stu->name}}</td>
    <td>{{$stu->email}}</td>
    <td>{{$stu->city}}</td>
    <td>{{$stu->marks}}</td>
    <td>{{$stu->pass_date}}</td>
</tr>
@endforeach

    {{$students->links()}}
    </table>
</body>
</html>