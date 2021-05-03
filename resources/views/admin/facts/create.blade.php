@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div class="push-left">
    <div class="push-left d-flex align-items-center">
        <form method="POST" action="{{route('fact.store')}}" class="w-50 mx-auto my-5 px-5">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre"
                    placeholder="Entrer un nombre" value="{{old('nombre')}}">
                    @error('nombre')
                    <span class="invalid-feedback pl-3"> <strong>Selectioner un nombre</strong></span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="logo">Choix de l'icone</label>
                <select class="form-control @error('logo') is-invalid @enderror" name="logo">
                    <option value="icofont-computer">Ordinateur</option>
                    <option value="icofont-chart-bar-graph">Graphique</option>
                    <option value="icofont-earth">Terre</option>
                    <option value="icofont-image">Paysage</option>
                    <option value="icofont-settings">Option</option>
                    <option value="icofont-tasks-alt">Calendrier</option>
                    <option value="icofont-simple-smile">Smiley</option>
                    <option value="icofont-document-folder">Folder</option>
                    <option value="icofont-live-support">Support</option>
                    <option value="icofont-users-alt-5">People</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gras">Gras</label>
                <input type="text" class="form-control @error('gras') is-invalid @enderror" id="gras" name="gras"
                    placeholder="Entrer un texte a mettre en valeur" value="{{old('gras')}}">
                    @error('gras')
                    <span class="invalid-feedback pl-3"> <strong>Selectioner un texte valide</strong></span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="normal">Normal</label>
                <input type="text" class="form-control @error('normal') is-invalid @enderror" id="normal" name="normal"
                    placeholder="Entrer un nombre" value="{{old('normal')}}">
                    @error('normal')
                    <span class="invalid-feedback pl-3"> <strong>Selectioner un texte valide</strong></span>
                    @enderror

            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection´
