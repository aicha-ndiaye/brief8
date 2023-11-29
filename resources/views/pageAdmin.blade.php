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

</head>
<body>

</body>
</html>

<div class="container mt-8">
    <div class="card card1 p-6">
        <div class="innercard p-6">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid"><img src="https://i.imgur.com/hSDDP67.png" height="100px" width="100px" /> <a class="navbar-brand name" href="#">Cloud<span class="go">Go</span></a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><span class="home">Home</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Domain</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Services</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>

                        </ul>
                        <div class="btn btn-dark">Sign up </div>
                    </div>
                </div>
            </nav>
            <div class="mt-3 d-flex justify-content-center"> <span class="heading">profil association</span> </div>
            <div class="d-flex justify-content-center"> <span class="text">assoc</span> </div>
            <div class="mt-3 d-flex justify-content-center"> <span class="text1">ajouter evenements </span> </div>
            <div class=" mt-3 d-flex justify-content-center gap-3">
                <div class="btn btn-success">Get Started</div>

            </div>
            <h4>liste des evenements</h4> <br>
            <!-- Property List Start -->
            <div class="row">
                @foreach ($event as $events)
            <div class="row mt-3 p-2 g-3 d-flex justify-content-center">


                <div class="col-md-4">
                    <div class="card2 p-2 py-3">
                        <div class="text-center d-flex flex-column align-items-center">
                            <div> <img src=" https://i.imgur.com/C4CUnKG.png" height="50px" width="50px" /> </div> <span class="stellar">{{$events->libelle}}</span> <span class="hosting">Shared Hosting</span> <span class="price mt-2">{{$events->nombre_de_passe}}<span class="small"> /places</span></span> <span class="year">{{$events->statu}}</span>
                            <button class="btn3 btn-success mt-2">voir plus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


