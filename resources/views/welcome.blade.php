<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{asset('assets/css/ec.css')}}" rel="stylesheet">

<!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
<!-- navbar -->
        <div class="nav">
        <!-- title -->
            <div class="title">
                <a href="{{ route('welcome') }}">
                    <h1>E</h1><h3>space</h3><h1>C</h1><h3>andidature</h3>
                </a>
            </div>
            <!-- login -->
            <div class="login">
                <div class="flex ">
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Sign in</a>
                </div>
            </div>
        </div>
<!-- welcome -->
        <div class="container welcome">
    <!--left  -->
            <div class="left">
                <span>Vous chercher un emploi ?</span> <br>
                <span>Rejoignez-nous !</span>
            </div>
    <!-- right -->
            <div class="right">
                <!-- <img src="{{asset('assets/photos/images.jpg')}}" alt=""> -->
                <span>Pas encore de compte ?</span><br>
                <button class="btn btn-primary"><a href="{{ route('login') }}">Je m'inscrire</a></button>
            </div>
        </div>
<!-- description -->
        <div class="container description">
        <!-- condidat -->
            <div class="candidat shadow">
                <h1>Candidat</h1>
                <div class="options">
                    <div class="option">
                        <div class="icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <span>chercher un offre</span>
                        </div>  
                        <div>
                            <span class="desc">
                                trouvez un offre d'étude , stage , formation , ou d'emploi facilement par des mots clés
                            </span>
                        </div>
                    </div>
                    <div class="option">
                        <div class="icon">
                            <i class="fa-brands fa-readme"></i>
                            <span>postuler aux offres</span>
                        </div>
                        <div>
                            <span class="desc">
                                Vous pouvez demander une candidature aux offres disponibles
                            </span>
                        </div>
                    </div>
                    <div class="option">
                        <div class="icon">
                            <i class="fa-regular fa-envelope"></i>
                            <span>Contacter les recruteures</span>
                        </div>
                        <div>
                            <span class="desc">
                                Contactez facilement les recruteures pour obtenir une aide
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <!-- entreprise -->
            <div class="entreprise">
                 <h1>Entreprise</h1>
                 <div class="options">
                    <div class="option">
                        <div class="icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <span>Chercher le bon candidat !</span>
                        </div>
                        <div class="">
                            <span class="desc">Notre équipe talentueuse de recruteurs peut vous aider à trouver le meilleur freelance pour le travail et nos copilotes techniques peuvent même gérer le projet pour vous.</span>
                        </div>
                    </div>
                    <div class="option">
                        <div class="icon">
                            <i class="fa-solid fa-pencil"></i>
                            <span>Crée un offre</span>
                    </div>
                        <div>
                            <span class="desc" >Notre équipe talentueuse de recruteurs peut vous aider à trouver le meilleur freelance pour le travail et nos copilotes techniques peuvent même gérer le projet pour vous.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- footer -->

        <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
                </div>
        <!-- Left -->

        <!-- Right -->
                <div>
                <a href="https://www.facebook.com/" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/banditklm/joblink" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
                </div>
        <!-- Right -->
            </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
                <div class="container footer row mt-3">
            <!-- Grid column -->
                    <div class="col-md-6 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Espace Candidature
                    </h6>
                   <p>
                         Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                    </div>
            <!-- Grid column -->

            <!-- Grid column -->
                <!-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                </div> -->
            <!-- Grid column -->

            <!-- Grid column -->
                <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    Links
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>-->
            <!-- Grid column -->

            <!-- Grid column -->
                    <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i>Casablanca,20000, Maroc</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        espaceC@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> +212666666666</p>
                    <p><i class="fas fa-print me-3"></i> +212666666666</p>
                    </div>
            <!-- Grid column -->
                </div>
        <!-- Grid row -->
                </div>
            </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">EspaceCandidature.ma</a>
            </div>
    <!-- Copyright -->
            </footer>
<!-- Footer -->

        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
