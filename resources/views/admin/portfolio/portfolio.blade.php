@extends('layouts.admin')
@include('layouts.flash')
@section('content')
@include('admin.partials.header')
<div class="d-flex push-left">
<div class="push-left">
    <a href="{{route('portfolio.create')}}"><button class="btn btn-secondary w-100"><h2 class="display-5">Ajouter</h2></button></a>
    @foreach ($portfolio as $folio)
        <div class="border border-secondary my-3 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <h1 class="px-3 py-4 mr-5"> ID : {{$folio->id}}</h1>
                <h1>Catégorie : {{$folio->filter}}</h1>
            </div>
            <div class="d-flex">
                <a href="{{route('portfolio.show',$folio->id)}}"><button class="btn btn-primary pt-3 px-5 ml-5"><h2 class="display-5">Voir</h2></button></a>
                <a href="{{route('portfolio.edit', $folio->id)}}"><button class="btn btn-success pt-3 px-5 ml-5"><h2 class="display-5">Modif</h2></button></a>
                <form action={{route('portfolio.destroy', $folio->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mx-5 pt-3 px-5" type="submit"><h2>Suprimer</h2></button>
                </form>
            </div>
        </div>
    @endforeach
</div>
</div>
@endsection´