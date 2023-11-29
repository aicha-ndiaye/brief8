<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .card2 {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .card2:hover {
            transform: scale(1.05);
        }

        .stellar {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
        }

        .hosting {
            color: #6c757d;
            margin-top: 5px;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
        }

        .year {
            font-size: 14px;
            color: #6c757d;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <h4 class="text-center mt-4">Liste des événements</h4>

    <!-- Property List Start -->
    <div class="row mt-3 p-2 g-3 d-flex justify-content-center">

        <div class="col-md-4">
            <div class="card2 p-2 py-3">
                <div class="text-center d-flex flex-column align-items-center">
                    <a href=""><img class="img-fluid" src="{{ asset('assets/img/'.$event->image)}}" alt=""></a>
                    <span class="stellar">{{$event->libelle}}</span>
                    <span class="hosting">Shared Hosting</span>
                    <p>{{$event->description}}</p>
                    <span class="price mt-2">{{$event->nombre_de_passe}}<span class="small"> /places</span></span>
                    <span class="year">{{$event->statu}}</span>
                    <a href="/modification/{{$event->id}}">
                        <button type="button" class="btn btn-success mt-3">Modifier</button>
                    </a>
                    <a href="/pageAdmin">
                        <button type="button" class="btn btn-secondary mt-2">Retour</button>
                    </a>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
