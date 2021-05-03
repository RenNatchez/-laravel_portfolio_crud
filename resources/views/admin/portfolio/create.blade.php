@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div class="push-left">
    <div class="push-left d-flex align-items-center">
        <form method="POST" action="{{route('portfolio.store')}}" class="w-50 mx-auto my-5 px-5" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Votre fichier depuis votre pc :</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                <span class="invalid-feedback pl-3"> <strong>Selectioner un fichier valide</strong></span>
                @enderror

            </div>
            <div class="form-group">
                <label for="filter">Choix du filtre</label>
                <select class="form-control" name="filter">
                    <option value="filter-app">app</option>
                    <option value="filter-web">web</option>
                    <option value="filter-card">card</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lien">entrer un lien</label>
                <input type="text" class="form-control @error('lien') is-invalid @enderror" value="{{old('lien')}}" id="lien" name="lien" placeholder="Entrer une description">
                    @error('lien')
                    <span class="invalid-feedback pl-3"> <strong>Entrer un lien valide</strong></span>
                    @enderror
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection´
