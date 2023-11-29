<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="registration-form">
        <form method="post" action="/formasso">
            @csrf
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="nom" id="nom" placeholder="nom">
            </div> <div class="form-group">
                <input type="date" class="form-control item" id="date" name="date_creation" placeholder="date de creation">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="slogan" id="email" placeholder="votre slogan">
            </div>

            <div class="form-group">
                <input type="file" name="logo" class="form-control item" id="logo" placeholder="ajoutez votre logo">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control item" id="logo" placeholder="ajoutez votre email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password" id="password" placeholder="votre mot de passe">
            </div>

            <div class="form-group">
                <a href="">
                <button type="submit" class="btn btn-block create-account">s'inscrire</button>
            </a>
            </div>
            <div class="form-group">
                <a href="/connecterassos">
                <button type="submit" class="btn btn-block create-account">vous avez un compte?</button>
            </a>
            </div>

        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
