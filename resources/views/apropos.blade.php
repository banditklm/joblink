
@extends('layouts.app')
@section('apropos')
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
            </section>
            <section class="cont-2">
                <div class="contacte ">
                    <span><h3><i class=" icon1 fa-solid fa-user"></i></h3></span>
                    <span><h3 class="text text-center">Contact</h3></span>
                </div>
                <div class="detailles">
                    <div class="detaill container-fluid">
                        <span><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;</span>phone :<span> {{$user->tel}} </span>
                    </div>
                    <div class="detaill container-fluid">
                        <span><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;</span>email :<span> {{$user->email}} </span>
                    </div>
                    <div class="detaill container-fluid ">
                        <span><i class="fa-solid fa-house"></i></span>&nbsp;&nbsp;<span>adresse: {{$user->adresse}}</span>
                    </div>
                </div>
            </section>
        </div>
        <div class="face-2 col-md-9"> 
            <section > 
                <div class="info" >
                    <span><h3><i class=" icone2 fa-solid fa-user"></i></h3></span>
                    <span class="p1"><h3>À propos de nous</h3></span>
                </div> 
                <div class="paragraphe"><p> 
                Cisco Systems est une entreprise informatique américaine spécialisée, à l’origine, dans le matériel réseau</p>
                </div>
            </section>
            <section class="experience" >
                <div  class="info">
                    <span><h3><i class=" icone3 fa-sharp fa-solid fa-briefcase"></i></h3></span>
                    <span class="p1"><h3> Objectives</h3></span>
                </div>
                <!-- <div class="fl">
                    <span><h6><h6></span>
                </div> -->
                <!-- <div class="paragraphe">
                    <strong>Junior Graphic DesignerBorcelle Studios</strong>
                    </div> -->
                    <div class="paragraphe">
                        <i class="fa-solid fa-circle-arrow-right"></i>&nbsp;&nbsp;<span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                    </div>
                    <div class="paragraphe">
                        <i class="fa-solid fa-circle-arrow-right"></i>&nbsp;&nbsp;<span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                    </div>
                    <div class="paragraphe">
                        <i class="fa-solid fa-circle-arrow-right"></i>&nbsp;&nbsp;<span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                    </div>
                    <div class="paragraphe">
                        <i class="fa-solid fa-circle-arrow-right"></i>&nbsp;&nbsp;<span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                    </div>
                     
            </section>
            <section > 
                <div  class="info"><span><h3><i class="icone5 fa-solid fa-gear"></i></h3></span>
                    <span class="p1"><h3>Produits et services</h3></span>
                </div>
                <div class="par paragraphe" >
                    <h6><i class="fa-solid fa-circle"></i>Networking</h6>
                    <h6><i class="fa-solid fa-circle"></i>Wireless and Mobility</h6>
                    <h6><i class="fa-solid fa-circle"></i>Security</h6>
                    
                </div>
            </section>
            <section class="experience" >
                 <div  class="info">
                    <span><h3><i class="icone5 fa-solid fa-book"></i></h3></span>
                    <span class="p1"><h3>Les Directeurs généraux</h3></span>
                </div>
                <div class="paragraphe"> 
                    <strong>Hassan Bahej</strong>
                </div>
                <div class="paragraphe">
                    <span>CEO</span>
                </div>
            </section>
        </div>

@endsection

