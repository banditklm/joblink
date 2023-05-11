<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            margin-top:20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;    
        }
        .main-body {
            padding: 15px;
        }
        .nav{
            display: flex;
            justify-content: center;
            background-color:#e3f2fd;
            margin-bottom:15px ;
        }
        .nav-item{
            
        }
        .card {
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col, .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }
        .mb-3, .my-3 {
            margin-bottom: 1rem!important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }
        .h-100 {
            height: 100%!important;
        }
        .shadow-none {
            box-shadow: none!important;
        }
        .active{
            background:none!important;
            border:none!important;
        }
    </style>
</head>
<body>
    <!-- Candidat -->
        <div class="container">
            <div class="main-body">
        
                <!-- Nav -->
                    <nav aria-label="breadcrumb" class="main-breadcrumb">
                        <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Mes Post</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Notification</a>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Une offre d'étude est disponible</a></li>
                                    <li><a class="dropdown-item" href="#">Une offre de formation est disponible</a></li>
                                    <li><a class="dropdown-item" href="#">Une offre de stage est disponible</a></li>
                                    <li><a class="dropdown-item" href="#">Une offre d'emploi est disponible</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Google vous envoyer une message</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Mon CV</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Mes sauvgardes</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Intérets
                                        </button>
                                    <!-- Button trigger modal -->

                                    <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Intérets</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <!-- modal body -->
                                                        <div class="modal-body">
                                                            <div class="" role="group" aria-label="Basic checkbox toggle button group">
                                                                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck1">Disign graphique</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck2">Comptabilité</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck3">Photoshop</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck4">Illustration</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck5">Juridique</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck6">Finance</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck7">Web scraping</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck8">Marketing</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck9">eCommerce</label>

                                                            </div>
                                                        </div>    
                                                            
                                                    <!-- modal body -->
                                                    <!-- modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save</button>
                                                        </div>
                                                    <!-- modal footer -->
                                                </div>
                                            </div>
                                        </div>
                                    <!-- Modal -->    
                                </li>
                        </ul>
                    </nav>
                <!-- /Nav -->
                <!-- Candidat body -->
                    <div class="row gutters-sm">
                        <div class="col-md-2">
                            <div class="card pb-5">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h4>Kenneth Valdez</h4>
                                            <p class="text-secondary mb-1">Full Stack Developer</p>
                                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                            <button class="btn btn-primary">Follow</button>
                                            <button class="btn btn-outline-primary">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row gutters-sm">
                                <div class="col-sm-6 mb-3">
                                    <div class="card mb">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Nom</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    Kenneth
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Prenom</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    Valdez
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                fip@jukmuh.al
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <h6 class="mb-0">Mot de passe</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    ************
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <h6 class="mb-3">Numèro de téléphone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary" >
                                                (239) 816-9029
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Date de naissance</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                28-07-2001
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Adresse</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Bay Area, San Francisco, CA
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Ville</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Casablanca
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Pays</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Maroc
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                                                    Edit Profile
                                                </button>

                                                <!-- Modal -->
                                                    <div class="modal fade" id="modal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <!-- Modal header -->
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Settings</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                <!-- Modal header -->
                                                                <!-- Modal body -->
                                                                    <div class="modal-body">
                                                                        <div class="container rounded bg-white mt-5 mb-5">
                                                                            <div class="row">
                                                                                <div class="col-md-2 border-right">
                                                                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('assets\photos\pic1.jpg')}}"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                                                                                </div>
                                                                                <div class="col-md-5 border-right">
                                                                                    <div class="p-3 py-5">
                                                                                        <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                                                                                            <h4 class="text-right">Profile Settings</h4>
                                                                                        </div> -->
                                                                                        <div class="row mt-2">
                                                                                            <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control" name="nom" id="nom" value=""></div>
                                                                                            <div class="col-md-6"><label class="labels">Prenom</label><input type="text" class="form-control" name="prenom" id="prenom" value="" ></div>
                                                                                        </div>
                                                                                        <div class="row mt-3">
                                                                                            <div class="col-md-12"><label class="labels">Numèro de tétéphone</label><input type="tel" class="form-control" name="tel" id="tel" value=""></div>
                                                                                            <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" name="email" id="email" value=""></div>
                                                                                            <div class="col-md-12"><label class="labels">Mot de passe</label><input type="password" class="form-control" name="mot" id="mot" value=""></div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <div class="p-3 py-5">
                                                                                        <!-- <br><br><br> -->
                                                                                        <div class="col-md-12"><label class="labels">Addresse</label><input type="text" class="form-control" name="adresse" id="adresse" value=""></div>
                                                                                        <div class="col-md-12"><label class="labels">Ville</label><input type="text" class="form-control" name="ville" id="ville" value=""></div>
                                                                                        <div class="col-md-12"><label class="labels">Pays</label><input type="text" class="form-control" name="pays" id="pays" value=""></div>
                                                                                        <div class="col-md-12"><label class="labels">Date de naissance</label><input type="date" class="form-control" name="age" id="age" value=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <!-- Modal body -->
                                                                <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                <!-- Modal footer -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- Modal -->
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>  
                        </div>
                    </div>
                <!-- /Candidat body -->
            </div>
        </div>
    <!-- /Candidat -->
    <!-- Recruteur -->    
        <div class="container">
            <div class="main-body">
        
                <!-- Nav -->
                    <nav aria-label="breadcrumb" class="main-breadcrumb">
                        <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Mes Post</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Notification</a>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Une offre d'étude est disponible</a></li>
                                    <li><a class="dropdown-item" href="#">Une offre de formation est disponible</a></li>
                                    <li><a class="dropdown-item" href="#">Une offre de stage est disponible</a></li>
                                    <li><a class="dropdown-item" href="#">Une offre d'emploi est disponible</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Google vous envoyer une message</a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">A propos</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Intérets
                                        </button>
                                    <!-- /Button trigger modal -->

                                    <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <!-- Modal header -->
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Intérets</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                    <!-- Modal header -->
                                                    <!-- modal body -->
                                                        <div class="modal-body">
                                                            <div class="" role="group" aria-label="Basic checkbox toggle button group">
                                                                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck1">Disign graphique</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck2">Comptabilité</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck3">Photoshop</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck4">Illustration</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck5">Juridique</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck6">Finance</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck7">Web scraping</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck8">Marketing</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck9">eCommerce</label>

                                                            </div>
                                                        </div>    
                                                            
                                                    <!-- modal body -->
                                                    <!-- modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save</button>
                                                        </div>
                                                    <!-- modal footer -->
                                                </div>
                                            </div>
                                        </div>
                                    <!-- /Modal -->    
                                </li>
                        </ul>
                    </nav>
                <!-- /Nav -->
                <!-- recruteur body -->
                    <div class="row gutters-sm">
                        <div class="col-md-2">
                            <div class="card pb-5">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h4>Kenneth Valdez</h4>
                                            <p class="text-secondary mb-1">Full Stack Developer</p>
                                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                            <button class="btn btn-primary">Follow</button>
                                            <button class="btn btn-outline-primary">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row gutters-sm">
                                <div class="col-sm-6 mb-3">
                                    <div class="card mb">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Nom</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    Kenneth
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Prenom</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    Valdez
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                fip@jukmuh.al
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <h6 class="mb-0">Mot de passe</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    ************
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <h6 class="mb-3">Numèro de téléphone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary" >
                                                (239) 816-9029
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Date de création</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                28-07-2001
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Adresse</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Bay Area, San Francisco, CA
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Ville</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Casablanca
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Pays</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Maroc
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
                                                    Edit Profile
                                                </button>

                                                <!-- Modal -->
                                                    <div class="modal fade" id="modal2" data-bs-backdrop="static" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <!-- Modal header -->
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="Label">Profile Settings</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                <!-- /Modal header -->
                                                                <!-- Modal body -->
                                                                    <div class="modal-body">
                                                                        <div class="container rounded bg-white mt-5 mb-5">
                                                                            <div class="row">
                                                                                <div class="col-md-2 border-right">
                                                                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('assets\photos\pic1.jpg')}}"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                                                                                </div>
                                                                                <div class="col-md-5 border-right">
                                                                                    <div class="p-3 py-5">
                                                                                        <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                                                                                            <h4 class="text-right">Profile Settings</h4>
                                                                                        </div> -->
                                                                                        <div class="row mt-2">
                                                                                            <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control" name="nom" id="nom" value=""></div>
                                                                                            <div class="col-md-6"><label class="labels">Prenom</label><input type="text" class="form-control" name="prenom" id="prenom" value="" ></div>
                                                                                        </div>
                                                                                        <div class="row mt-3">
                                                                                            <div class="col-md-12"><label class="labels">Numèro de tétéphone</label><input type="tel" class="form-control" name="tel" id="tel" value=""></div>
                                                                                            <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" name="email" id="email" value=""></div>
                                                                                            <div class="col-md-12"><label class="labels">Mot de passe</label><input type="password" class="form-control" name="mot" id="mot" value=""></div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <div class="p-3 py-5">
                                                                                        <br><br><br>
                                                                                        <div class="col-md-12"><label class="labels">Addresse</label><input type="text" class="form-control" name="adresse" id="adresse" value=""></div>
                                                                                        <div class="col-md-12"><label class="labels">Ville</label><input type="text" class="form-control" name="ville" id="ville" value=""></div>
                                                                                        <div class="col-md-12"><label class="labels">Pays</label><input type="text" class="form-control" name="pays" id="pays" value=""></div>
                                                                                        <div class="col-md-12"><label class="labels">Date de création</label><input type="date" class="form-control" name="creation" id="creation" value=""></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <!-- /Modal body -->
                                                                <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                <!-- /Modal footer -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- /Modal -->
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>  
                        </div>
                    </div>
                <!-- /recruteur body -->
            </div>
        </div>
    <!-- /Recruteur --> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>