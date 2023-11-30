<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un événement</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .registration-form {
            width: 360px;
            margin: 50px auto;
            font-size: 16px;
        }

        .form-icon {
            text-align: center;
            padding: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .create-account {
            background-color: #28a745;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="registration-form">
        <form method="post" action="/reservation">
            @csrf
            <h1 class="text-center">reservation</h1>

            <div class="form-group">
                <input type="text" class="form-control" name="nomInteresse" value="" id="nomInteresse" placeholder="nom de l'interesse" >
            </div>
            <div class="form-group">
                <input type="number" name="nombrePlace" class="form-control" value="" id="nombrePlace" placeholder="nombre de place">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" value="{{auth()->guard('association')->user()->id}}" name="association_id " id="association_id" >
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" value="{{{auth()->guard('association')->user()->id}}}" name="user_id " id="user_id" >
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">reserver</button>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
