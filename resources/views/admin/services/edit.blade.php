@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div class="push-left">
    <div class="push-left d-flex align-items-center">
        <form method="POST" action="{{route('service.udapte', $service->id)}}" class="w-50 mx-auto my-5 px-5">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Choix D'icone</label>
                <select class="form-control" name="image">
                    <option value="">icone 1</option>
                    <option value="">icone 2</option>
                    <option value="">icone 3</option>
                    <option value="">icone 4</option>
                    <option value="">icone 5</option>
                    <option value="">icone 6</option>
                </select>

            <div class="form-group">
                <label for="filter">Choix du filtre</label>
                <select class="form-control" name="filter">
                    <option value="filter-app">app</option>
                    <option value="filter-web">web</option>
                    <option value="filter-card">card</option>
                </select>
              </div>
            <div class="form-group">
                <label for="lien">lien</label>
                <input value="{{$service->lien}}" type="text" class="form-control" id="lien" name="lien"
                    placeholder="Entrer une description">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection´
