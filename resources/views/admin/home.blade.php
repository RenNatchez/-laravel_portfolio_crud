@extends('layouts.admin')
@include('layouts.flash')
@section('content')
@include('admin.partials.header')
<div class="container push">
    <div class="bg-white px-5 card-admin">
        <div class="d-flex justify-content-between py-3">
            <h1 class="m-0 my-auto display-3">Admin</h1>
            <div class="d-flex  py-3">
                <a href="{{route('home')}}" class="mr-3"><button class="btn btn-dark">
                        <h2 class="display-5">Retour</h2>
                    </button></a>
                <a href="{{route('utilisateur.edit',$utilisateur->id)}}" class="ml-3"><button class="btn btn-dark btn-darkblu">
                        <h2 class="display-5">Modifier</h2>
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
                <div class="form-group mb-1">
                    <label for="identite">Identité</label>
                    <input value="{{$utilisateur->identite}}" type="text" class="form-control" id="identite"
                        name="identite" disabled="disabled">
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group my-1  w-50 pr-3">
                        <label for="anniversaire">Anniversaire</label>
                        <input value="{{$utilisateur->anniversaire}}" type="text" class="form-control" id="anniversaire"
                            name="anniversaire" disabled="disabled">
                    </div>
                    <div class="form-group my-1  w-50 pl-3">
                        <label for="age">Age</label>
                        <input value="{{$utilisateur->age}}" type="text" class="form-control" id="age" name="age"
                            disabled="disabled">
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group my-1  w-50 pr-3">
                        <label for="poste">Poste</label>
                        <input value="{{$utilisateur->poste}}" type="text" class="form-control" id="poste" name="poste"
                            disabled="disabled">
                    </div>
                    <div class="form-group my-1 w-50  pl-3">
                        <label for="site">Site</label>
                        <input value="{{$utilisateur->site}}" type="text" class="form-control" id="site" name="site"
                            disabled="disabled">
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group my-1  w-50 pr-3">
                        <label for="degree">Degrée</label>
                        <input value="{{$utilisateur->degree}}" type="text" class="form-control" id="degree"
                            name="degree" disabled="disabled">
                    </div>
                    <div class="form-group my-1  w-50 pl-3">
                        <label for="statut">Statut</label>
                        <input value="{{$utilisateur->statut}}" type="text" class="form-control" id="statut"
                            name="statut" disabled="disabled">
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group my-1 w-50 pr-3">
                        <label for="phone">Phone</label>
                        <input value="{{$utilisateur->phone}}" type="text" class="form-control" id="phone"
                            name="phone" disabled="disabled">
                    </div>
                    <div class="form-group my-1 w-50 pl-3">
                        <label for="mail">Mail</label>
                        <input value="{{$utilisateur->mail}}" type="text" class="form-control" id="mail"
                            name="mail" disabled="disabled">
                    </div>
                </div>
                <div class="form-group mb-1">
                    <label for="ville">Ville</label>
                    <input value="{{$utilisateur->ville}}" type="text" class="form-control" id="ville"
                        name="ville" disabled="disabled">
                </div>
                <div class="form-group mb-1">
                    <label for="description">Description</label>
                    <input value="{{$utilisateur->description}}" type="text" class="form-control" id="description"
                        name="description" disabled="disabled">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
