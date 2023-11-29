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
        <form method="post" action="/modifieEvent/{{$evenement->id}}">
            @csrf
            <h1 class="text-center">Ajouter un événement</h1>

            <div class="form-group">
                <input type="text" class="form-control" name="libelle" value="{{$evenement->libelle}}" id="libelle" placeholder="Libellé" >
            </div>
            <div class="form-group">
                <input type="text" name="description" class="form-control" value="{{$evenement->description}}" id="description" placeholder="description de l'evenement">
            </div>

            <div class="form-group">
                <label for="Date de l'événement" class="form-control">Date de l'événement</label>
                <input type="date" class="form-control" id="dateEvenement" value="{{$evenement->dateEvenement}}" name="dateEvenement" placeholder="Date de l'événement">
            </div>

            <div class="form-group">
                <select class="form-control" name="statu" value="{{$evenement->statu}}">
                    <option value="ouvert">Ouvert</option>
                    <option value="ferme">Fermé</option>
                </select>
            </div>

            <div class="form-group">
                <input type="number" name="nombre_de_passe" value="{{$evenement->nombre_de_passe}}" class="form-control" id="nombre_de_passe" placeholder="Nombre de places">
            </div>

            <div class="form-group">
                <input type="text" name="adresse" class="form-control" value="{{$evenement->adresse}}" id="adresse" placeholder="Adresse">
            </div>

            <div class="form-group">
                <input type="file" class="form-control" name="image" id="image" placeholder="Image">
            </div>
            <div class="form-group">
                <label for="date limite de linscription"  class="form-control">Date limite d'inscription</label>
                <input type="date" class="form-control" value="{{$evenement->date_limite_inscription}}" id="date" name="date_limite_inscription" placeholder="Date limite d'inscription">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">modifier</button>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
