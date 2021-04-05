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
            margin: 0 auto;
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <div class="block">
        <form action="{{ route('add-user') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" aria-describedby="nameHelp" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="surname">Surname</label>
                <input name="surname" type="text" class="form-control" aria-describedby="surnameHelp" placeholder="Enter surname">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <?php
                    echo Form::open(array('url' => '/uploadfile', 'files' => 'true'));
                    echo Form::file('image');
                    Form::close();
                    ?>
                </div>
            </div>


            <div class="form-group">
                <input type="submit" name="send" value="Send" class="btn btn-success">
            </div>
        </form>
</body>
</html>
