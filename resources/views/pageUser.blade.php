@include('cssuser')

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
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            padding: 0;
        }

        .btn-dark {
            width: 20%;
        }

        .card1 {
            width: 100%;
        }

        .navbar {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #343a40;
        }

        .navbar-toggler-icon {
            background-color: #343a40;
        }

        .navbar-nav .nav-link {
            color: #343a40;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .heading {
            font-size: 28px;
            font-weight: bold;
        }

        .text {
            font-size: 18px;
        }

        .btn3 {
            background-color: #28a745;
            color: #ffffff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #ffffff;
        }
    </style>
</head>
<body>

<div class="container mt-8">
    <div class="card card1 p-6">
        <div class="innercard p-6">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <img src="{{asset('assets/img/'.auth()->user()->image)}}" height="100px" width="100px" />
                    <a class="navbar-brand name" href="#">{{auth()->user()->prenom}} {{auth()->user()->nom}}</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href=""><span class="home"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-dark" onclick="document.getElementById('form-logout').submit()">
                            <form action="/deconnexionUser" method="post" id="form-logout">@csrf</form>
                            Se Déconnecter
                          </a>
                        {{-- <div class="btn btn-dark">deconnexion</div> --}}
                    </div>
                </div>
            </nav>
            <div class="mt-3 d-flex justify-content-center">
                <span class="heading">profil client</span>
            </div>
            <div class="d-flex justify-content-center">
                <span class="text">client</span>
            </div>

            <div class="mt-3 d-flex justify-content-center gap-3">
                <h4>liste des evenements</h4>
            </div>
            <!-- Property List Start -->
            <div class="row mt-3 p-2 g-3">
                @foreach ($event as $events)
                    <div class="col-md-4">
                        <div class="card2 p-2 py-3">
                            <div class="text-center d-flex flex-column align-items-center">
                                <a href=""><img class="img-fluid" src="{{asset('assets/img/'.$events->image)}}" alt=""></a>
                                <span class="stellar">{{$events->libelle}}</span>
                                <span class="stellar">{{$events->description}}</span>
                                <span class="price mt-2">{{$events->nombre_de_passe}}<span class="small"> /places</span></span>
                                <span class="year">{{$events->statu}}</span>
                                <span class="stellar">{{$events->dateEvenement}}</span>
                                <a href="/reservation/{{$events->id}}">
                                    <button class="btn3 btn-success mt-2">reserver</button>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>

    </div>
</div>
</body>
</html>
