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
    body {
        background: red;
        font-family: "Nunito";
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8;
        border-color: blue;
    }

    .profile-button {
        background: ;
        box-shadow: none;
        border: none;
    }

    .profile-button:hover {
        background:;
    }

    .profile-button:focus {
        background: ;
        box-shadow: none;
    }

    .profile-button:active {
        background: ;
        box-shadow: none;
    }

    .back:hover {
        
        cursor: pointer;
    }

    .labels {
        font-size: 15px;
    }
    
</style>
</head>
<body>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-2 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('assets\photos\pic1.jpg')}}"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control" name="nom" id="nom" value=""></div>
                    <div class="col-md-6"><label class="labels">Prenom</label><input type="text" class="form-control" name="prenom" id="prenom" value="" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Numèro de tétéphone</label><input type="tel" class="form-control" name="tel" id="tel" value=""></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" name="email" id="email" value=""></div>
                    <div class="col-md-12"><label class="labels">Mot de passe</label><input type="password" class="form-control" name="mot" id="mot" value=""></div>
                    
                </div>
                <div class="mt-5 text-center"><button class="btn profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="p-3 py-5">
                <br><br><br>
                <div class="col-md-12"><label class="labels">Addresse</label><input type="text" class="form-control" name="adresse" id="adresse" value=""></div>
                <div class="col-md-12"><label class="labels">Ville</label><input type="text" class="form-control" name="ville" id="ville" value=""></div>
                <div class="col-md-12"><label class="labels">Pays</label><input type="text" class="form-control" name="pays" id="pays" value=""></div>
                <div class="col-md-12"><label class="labels">Date de création</label><input type="date" class="form-control" name="age" id="age" value=""></div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
</body>
</html>