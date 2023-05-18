<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./project.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
<link href="{{asset('assets/css/apropos.css')}}" rel="stylesheet">

</head> 
<body>
<!-- Edit Apropos -->
                <div class="modal fade" id="poste" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl red">
                        <div class="modal-content">
    <!-- modal header -->
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Cv</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                           
    <!-- modal body -->
                            <div class="modal-body">
                                <div class="cont-bg">
    <!-- tags-1 -->
                                    <div class="tags-1">
                                        <div class="imag">
                                            <a href=""><img src="{{asset('assets/photos/tips.jpg')}}" alt="photo de profile" class="img rounded-circle" width="100px" height="100px"></a>
                                        </div>
                                        <div class="desc">
                                            <h5>{{$user->nom}}&nbsp;{{$user->prenom}}</h5>
                                            <span class="text text-secondary">{{$user->email}}</span>
                                        </div>
                                    </div>
    <!-- tags-2 -->
                                    <div class="tags-2">
                                        <div class="container-fluid">
                                            <form form method="POST" action="{{ route('users.update', $user->id) }}">
                                            @csrf
                                            @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4>Informations personnels</h4>
                                                        <div class="champ1">
                                                            &nbsp;&nbsp;<label for="name">Full name</label><br>
                                                            <input class="form-control" type="text" name="name" id="name" placeholder="full name" value="{{$user->name}}">
                                                        </div>
                                                        <div class="champ1">
                                                            &nbsp;&nbsp;<label for="adresse">Adresse</label><br>
                                                            <input class="form-control" type="text" name="adresse" id="adresse" placeholder="adresse" value="{{$user->adresse}}">
                                                        </div>
                                                        <div class="champ1">
                                                            &nbsp;&nbsp;<label for="tel">Tel</label><br>
                                                            <input class="form-control" type="tel" name="tel" id="tel" placeholder="tel" value="{{$user->tel}}">
                                                        </div>
                                                        <div class="champ1">
                                                            &nbsp;&nbsp;<label for="domaine">Domaine</label><br>
                                                            <input class="form-control" type="text" name="domaine" id="domaine" placeholder="domaine" value="{{$user->domaine}}">
                                                        </div>
                                                        <div class="champ1">
                                                            &nbsp;&nbsp;<label for="info">About</label><br>
                                                            <textarea class="form-control" name="info" id="info" cols="5" rows="3">{{$user->description}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4>Experience</h4>
                                                        <div class="champ2">
                                                            <input class="form-control" type="date" name="start1" id="start1" placeholder="Start" >
                                                            <input class="form-control" type="date" name="end1" id="end1" placeholder="End" >
                                                            <input class="form-control" type="text" name="title1" id="title1" placeholder="Title" >
                                                            <input class="form-control" type="text" name="desc1" id="desc1" placeholder="Description" >
                                                        </div>
                                                        <h4>Diplome</h4>
                                                        <div class="champ2">
                                                            <input class="form-control" type="date" name="start2" id="start2" placeholder="Start" >
                                                            <input class="form-control" type="date" name="end2" id="end2" placeholder="End" >
                                                            <input class="form-control" type="text" name="title2" id="title2" placeholder="Title" >
                                                            <input class="form-control" type="text" name="desc2" id="desc2" placeholder="Description" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4>Compétence</h4>
                                                        <div class="champ3">
                                                            <input class="form-control" type="text" name="competence1" id="competence" placeholder="compétence" value="{{$user->competences}}">
                                                            <input class="form-control" type="text" name="competence" id="competence" placeholder="compétence">
                                                            <input class="form-control" type="text" name="competence" id="competence" placeholder="compétence">
                                                        </div>
                                                        <h4>Référence</h4>
                                                        <div class="champ3">
                                                            <input class="form-control" type="text" name="reference" id="reference" placeholder="référence">
                                                            <input class="form-control" type="text" name="domain" id="domain" placeholder="domain">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
    <!-- tags-2 -->
                                </div>
                            </div>
    <!-- modal footeer-->
                            <div class="modal-footer">
                                <button type="reset" class="btn" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn">Save changes</button>
                            </div>
                         </form>
    <!-- modal footeer-->
                        </div>
                    </div>
                </div>









<!-- Apropos Display -->
    <div class="container-fluid row">
        <div class="face-1 col-md-3">
            <section class="cont-1">
                <div class="photos mt-4">
                    <div class="photo-1">
                        <img src="{{ asset('assets/images/'.$user->path)}} "alt="photo de profile" class="photo rounded-circle"/>
                    </div>
                </div>
                <div class="name">
                        <h1>
                            <strong>{{$user->nom}}</strong>
                        </h1>
                </div>
                <div class="domain">
                    <h5><span>{{$user->domaine}}</span></h5>
                </div>

                <div class="edit">
                  <button type="button" class="mode" data-bs-toggle="modal" data-bs-target="#poste">
                    Edit 
                   </button> 
                </div>

                
            </section>
            <section class="cont-2">
                <div class="contacte ">
                    <span><h3><i class=" icon1 fa-solid fa-user"></i></h3></span>
                    <span><h3 class="text text-center">Contact</h3></span>
                </div>
                <div class="detailles">
                    <div class="detaill container-fluid">
                        <span><i class="fa-solid fa-phone"></i></span>phone :<span> {{$user->tel}} </span>
                    </div>
                    <div class="detaill container-fluid">
                        <span><i class="fa-solid fa-envelope"></i></span>email :<span> {{$user->email}} </span>
                    </div>
                    <div class="detaill container-fluid ">
                        <span><i class="fa-solid fa-house"></i></span><span>adresse: {{$user->adresse}}</span>
                    </div>
                </div>
            </section>
        </div>
        <div class="face-2 col-md-9"> 
            <section > 
                <div class="info" >
                    <span><h3><i class=" icone2 fa-solid fa-user"></i></h3></span>
                    <span class="p1"><h3>A propos</h3></span>
                </div> 
                <div class="paragraphe"><p> 
                {{$user->info}} </p>
                </div>
            </section>
            <section class="experience" >
                <div  class="info">
                    <span><h3><i class=" icone3 fa-sharp fa-solid fa-briefcase"></i></h3></span>
                    <span class="p1"><h3> Objectives</h3></span>
                </div>
                <div class="fl">
                    <span><h6><i class="fa-solid fa-circle-arrow-right"></i><h6></span>
                    <span><strong> 2012 - 2015 </strong></span>
                </div>
                <div class="paragraphe">
                    <strong>Junior Graphic DesignerBorcelle Studios</strong>
                </div>
                <div class="paragraphe">
                    <span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                </div>
                <div class="fl">
                    <span><h6><i class="fa-solid fa-circle-arrow-right"></i><h6></span>
                    <span><strong>2012 - 2015</strong><span>    
                </div>
                <div class="paragraphe">
                    <strong>Junior Graphic DesignerBorcelle Studios</strong>
                </div>
                <div class="paragraphe">
                    <span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                </div>
                <div class="fl">
                    <span><h6><i class="fa-solid fa-circle-arrow-right"></i><h6></span>
                    <span><strong>2012 - 2015</strong><span>
                </div>
                <div class="paragraphe"> 
                    <strong>Junior Graphic DesignerBorcelle Studios</strong>
                </div>
                <div class="paragraphe">
                    <span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                </div>
            </section>
            <section class="experience"  > 
                <div  class="info"> <span><h3><i class="icone4 fa-solid fa-book-open"></i></h3></span>
                    <span class="p1"><h3>Service</h3></span>
                </div>
                <div class="fl">
                    <span><h6><i class="fa-solid fa-circle-arrow-right"></i><h6></span>
                    <span><strong> 2012 - 2015 </strong></span>
                </div >
                <div class="paragraphe">
                    <strong>Junior Graphic DesignerBorcelle Studios</strong>
                </div>
                <div class="paragraphe">
                    <span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                </div>
                <div class="fl">
                    <span><h6><i class="fa-solid fa-circle-arrow-right"></i><h6></span>
                    <span><strong>2012 - 2015</strong><span>    
                </div>
                <div class="paragraphe">
                    <strong>Junior Graphic DesignerBorcelle Studios</strong>
                </div>
                <div class="paragraphe">
                    <span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                </div>
                <div class="fl">
                    <span><h6><i class="fa-solid fa-circle-arrow-right"></i><h6></span>
                    <span><strong>2012 - 2015</strong><span>
                </div>
                <div class="paragraphe"> 
                    <strong>Junior Graphic DesignerBorcelle Studios</strong>
                </div>
                <div class="paragraphe">
                    <span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                </div>      
            </section>
            <section > 
                <div  class="info"><span><h3><i class="icone5 fa-solid fa-gear"></i></h3></span>
                    <span class="p1"><h3>COMPETENCE</h3></span>
                </div>
                <div class="par paragraphe" >
                    <h6><i class="fa-solid fa-circle"></i>{{$user->competences}}</h6>
                    <h6><i class="fa-solid fa-circle"></i>Graphic & Web Design</h6>
                    <h6><i class="fa-solid fa-circle"></i>Graphic & Web Design</h6>
                    
                </div>
            </section>
            <section class="experience" >
                 <div  class="info">
                    <span><h3><i class="icone5 fa-solid fa-book"></i></h3></span>
                    <span class="p1"><h3>REFERENCE</h3></span>
                </div>
                <div class="paragraphe"> 
                    <strong>Junior Graphic </strong>
                </div>
                <div class="paragraphe">
                    <span>Wardiere Inc. / CEO</span>
                </div>
                <div class="paragraphe"> 
                    <strong>Junior Graphic </strong>
                </div>
                <div class="paragraphe">
                    <span>Wardiere Inc. / CEO</span>
                </div>
                <div class="paragraphe"> 
                    <strong>Junior Graphic</strong>
                </div>
                <div class="paragraphe">
                    <span>Wardiere Inc. / CEO</span>
                </div>
            </section>
        </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>