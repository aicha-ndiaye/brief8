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

        .action-buttons {
            display: flex;
            justify-content: space-between;
        }

        .action-buttons button {
            margin-right: 5px;
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
                    <th scope="col">Date de l'evenement</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reserve as $reserves)
                    {{-- @if($reserves->evenement->association_id ==auth()->guard('association')->user()->id) --}}
                        <tr>
                            <td>{{ $reserves->nomInteresse }}</td>
                            <td>{{ $reserves->nombrePlace }}</td>
                            <td>{{ $reserves->evenement->libelle }}</td>
                            <td>{{ $reserves->evenement->dateEvenement }}</td>
                            <td class="action-buttons">
                                <form action="}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Accepter</button>
                                </form>
                                <form action="" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Refuser</button>
                                </form>
                            </td>
                        </tr>
                    {{-- @endif --}}
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
