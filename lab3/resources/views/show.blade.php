<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>

<body>
    <hr>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <th> {{ $employee->id }} </th>
            <th> {{ $employee->name }} </th>
            <th> {{ $employee->email }} </th>
            <th> {{ $employee->message }} </th>
            <th> <img src="{{ asset('uploads/' . $employee->image) }}" width=200px height=100px alt=""> </th>
        </tr>
        <br>
        <hr>
        @endforeach
    </tbody>
</body>

</html> 