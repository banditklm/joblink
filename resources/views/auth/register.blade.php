@extends('layouts.app')

@section('content')

<style>
    body{
        /* background-image: url('/assets/photos/wallpaper8.jpg');
        background-attachment: fixed;  */
        background-color: #37517e ;
    }
</style>

<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text text-center text-light">Register</h1>
        <div class="col-md-6">
            <div class="card">
                <!-- <div class="card-header">{{ __('Register') }}</div> -->
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
                            <div class="col-md-6">
                                <select id="mySelect" name="role" class="form-select form-control @error('role') is-invalid @enderror" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    <option selected value="2">Candidat</option>
                                    <option value="3">Recruteure</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label id="nom" for="nom" class="col-md-4 col-form-label text-md-end">Nom</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="prenom" class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" autocomplete="prenom" autofocus>
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

 
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmer le mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var selectElement = document.getElementById('mySelect');
    var label = document.getElementById('nom');
    var prenom = document.getElementById('prenom');
    selectElement.addEventListener('change', function() {
    var selectedOption = selectElement.value;

        if (selectedOption === '2'){
            label.textContent = 'Nom';
            label.innerHTML  = 'Nom';
            prenom.classList.remove('d-none');
        }else if (selectedOption === '3'){
            label.textContent = 'Nom';
            label.innerHTML  = 'Nom';
            prenom.classList.add('d-none');
        }

    });
</script>
@endsection
