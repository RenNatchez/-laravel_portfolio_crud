@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div class="push-left">
    <div class="push-left d-flex align-items-center">
        <form method="POST" action="{{route('service.udapte', $service->id)}}" class="w-50 mx-auto my-5 px-5">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="logo">Choix D'icone</label>
                <select class="form-control" name="logo">
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
                <label for="titre">Titre</label>
                <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" placeholder="Entrer un titre" value="{{$service->titre}}">
                    @error('titre')
                    <span class="invalid-feedback pl-3"> <strong>Entrer un titre</strong></span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Entrer une description"  value="{{$service->description}}">
                    @error('titre')
                    <span class="invalid-feedback pl-3"> <strong>Entrer une description</strong></span>
                    @enderror
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection´
