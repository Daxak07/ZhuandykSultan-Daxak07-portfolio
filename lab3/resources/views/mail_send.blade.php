<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .block {
            display: block;
            width: 100%;
            max-width: 450px;
            margin-left: 50px;
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <div class="block">
        <form action="{{ route('add-user') }}" method="post" enctype="multipart/form-data">
            @csrf

            <input name="name" type="text" class="form-control" aria-describedby="nameHelp" placeholder="Enter name" style="margin-bottom: 15px">

            <input name="surname" type="text" class="form-control" aria-describedby="surnameHelp" placeholder="Enter surname" style="margin-bottom: 15px">

            <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" style="margin-bottom: 15px">
             
            <div class="custom-file" style="padding-bottom: 15px">
                <?php
                echo Form::open(array('url' => '/uploadfile', 'files' => 'true'));
                echo Form::file('image');
                Form::close();
                ?>
            </div>

            <input type="submit" name="send" value="Send" class="btn btn-danger">
        </form>
</body>
</html>
