<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        th, td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }
    </style>
</head>
<body>

    <div class="container mt-3">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Nombre de places</th>
                    <th scope="col">Nom de l'evenement</th>
                    <th scope="col">date de l'evenement</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reserve as $reserves)
                    <tr>
                        <a href="accepter">
                        <td>{{ $reserves->nomInteresse }}</td>
                    </a>
                        <td>{{ $reserves->nombrePlace }}</td>
                        <td>{{ $reserves->evenement->libelle }}</td>
                        <td>{{ $reserves->evenement->dateEvenement }}</td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
