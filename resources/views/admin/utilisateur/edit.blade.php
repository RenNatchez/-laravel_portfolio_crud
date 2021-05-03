@extends('layouts.admin')
@include('layouts.flash')
@section('content')
@include('admin.partials.header')
<div class="container push">
    <div class="bg-white px-5 card-admin">
        <div class="d-flex justify-content-between py-3">
            <h1 class="m-0 my-auto display-3">Admin</h1>
            <div class="d-flex  py-3">
                <a href="{{route('admin.home')}}" class="mr-3"><button class="btn btn-dark">
                        <h2 class="display-5">Retour</h2>
                    </button></a>
            </div>
        </div>
        <div class="bg-dark pt-1"></div>
        <div class="d-flex py-5">
            <div class="w-25">
                @if (File::exists('storage/img/' .$utilisateur->image))
                <img src={{asset('storage/img/' .$utilisateur->image)}} class="img-fluid" alt="bug">
                @else
                <img src={{asset('assets/img/' .$utilisateur->image)}} class="img-fluid" alt="bug">
                @endif
            </div>
            <div class="w-75 px-5">
                <form method="POST" action="{{route('utilisateur.udapte', $utilisateur->id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group utilisateur-file">
                        <label for="image">Votre photo :</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image"
                            name="image">
                        @error('image')
                        <span class="invalid-feedback pl-3"> <strong>Selectioner une photo valide</strong></span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="identite">Identité</label>
                        <input value="{{$utilisateur->identite}}" type="text" class="form-control @error('identite') is-invalid @enderror" id="identite"
                            name="identite">
                            @error('identite')
                            <span class="invalid-feedback pl-3"> <strong>Selectioner une identité valide</strong></span>
                            @enderror
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group my-1  w-50 pr-3">
                            <label for="anniversaire">Anniversaire</label>
                            <input value="{{$utilisateur->anniversaire}}" type="text" class="form-control @error('anniversaire') is-invalid @enderror"
                                id="anniversaire" name="anniversaire">
                            @error('anniversaire')
                            <span class="invalid-feedback pl-3"> <strong>Selectioner une date
                                    d'anniversaire</strong></span>
                            @enderror
                        </div>
                        <div class="form-group my-1  w-50 pl-3">
                            <label for="age">Age</label>
                            <input value="{{$utilisateur->age}}" type="number" class="form-control" id="age" name="age" @error('age') is-invalid @enderror>
                        </div>
                        @error('age')
                        <span class="invalid-feedback pl-3"> <strong>Selectioner un age valide</strong></span>
                        @enderror

                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group my-1  w-50 pr-3">
                            <label for="poste">Poste</label>
                            <input value="{{$utilisateur->poste}}" type="text" class="form-control  @error('poste') is-invalid @enderror" id="poste"
                                name="poste">
                            @error('poste')
                            <span class="invalid-feedback pl-3"> <strong>Selectioner une poste</strong></span>
                            @enderror

                        </div>
                        <div class="form-group my-1 w-50  pl-3">
                            <label for="site">Site</label>
                            <input value="{{$utilisateur->site}}" type="text" class="form-control @error('site') is-invalid @enderror" id="site"
                                name="site">
                            @error('site')
                            <span class="invalid-feedback pl-3"> <strong>Entrer votre site</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group my-1  w-50 pr-3">
                            <label for="degree">Degrée</label>
                            <input value="{{$utilisateur->degree}}" type="text" class="form-control  @error('degree') is-invalid @enderror" id="degree"
                                name="degree">
                            @error('degree')
                            <span class="invalid-feedback pl-3"> <strong>Selectioner une Degrée d'etude</strong></span>
                            @enderror

                        </div>
                        <div class="form-group my-1  w-50 pl-3">
                            <label for="statut">Statut</label>
                            <input value="{{$utilisateur->statut}}" type="text" class="form-control @error('statut') is-invalid @enderror" id="statut"
                                name="statut">
                            @error('statut')
                            <span class="invalid-feedback pl-3"> <strong>Selectioner une statut</strong></span>
                            @enderror

                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group my-1 w-50 pr-3">
                            <label for="phone">Phone</label>
                            <input value="{{$utilisateur->phone}}" type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                name="phone">
                            @error('phone')
                            <span class="invalid-feedback pl-3"> <strong>Entrer un numéro valide</strong></span>
                            @enderror

                        </div>
                        <div class="form-group my-1 w-50 pl-3">
                            <label for="mail">Mail</label>
                            <input value="{{$utilisateur->mail}}" type="email" class="form-control @error('mail') is-invalid @enderror" id="mail"
                                name="mail">
                            @error('mail')
                            <span class="invalid-feedback pl-3"> <strong>Entrer un mail valide</strong></span>
                            @enderror

                        </div>
                    </div>
                    <div class="form-group mb-1">
                        <label for="ville">Ville</label>
                        <input value="{{$utilisateur->ville}}" type="text" class="form-control @error('ville') is-invalid @enderror" id="ville" name="ville">
                        @error('ville')
                        <span class="invalid-feedback pl-3"> <strong>Entrer une ville</strong></span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="description">Description</label>
                        <input value="{{$utilisateur->description}}" type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                            name="description">
                        @error('description')
                        <span class="invalid-feedback pl-3"> <strong>Entrer une description valide</strong></span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection´
