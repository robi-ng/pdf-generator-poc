<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .container {
                margin-top: 50px;
            }
            .form-control {
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form action="/submissions" method="POST">
                @csrf
                <textarea name="input1" class="form-control" maxlength="300"></textarea>
                <textarea name="input2" class="form-control" maxlength="300"></textarea>
                <textarea name="input3" class="form-control" maxlength="300"></textarea>
                <textarea name="input4" class="form-control" maxlength="300"></textarea>
                <textarea name="input5" class="form-control" maxlength="300"></textarea>
                <button class="btn btn-success">Generate PDF</button>
            </form>
        </div>
    </body>
</html>
