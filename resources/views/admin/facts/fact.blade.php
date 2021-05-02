@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div class="d-flex push-left">
<div class="push-left">
    <a href="{{route('fact.create')}}"><button class="btn btn-secondary w-100"><h2 class="display-5">Ajouter</h2></button></a>
    @foreach ($facts as $fact)
        <div class="border border-secondary my-3 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <h1 class="px-3 py-4 mr-5"> ID : {{$fact->id}}</h1>
                <h1>Catégorie : {{$fact->id}}</h1>
            </div>
            <div class="d-flex">
                <a href="{{route('fact.show',$fact->id)}}"><button class="btn btn-primary pt-3 px-5 ml-5"><h2 class="display-5">Voir</h2></button></a>
                <a href="{{route('fact.edit', $fact->id)}}"><button class="btn btn-success pt-3 px-5 ml-5"><h2 class="display-5">Modif</h2></button></a>
                <form action={{route('fact.destroy', $fact->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mx-5 pt-3 px-5" type="submit"><h2>Suprimer</h2></button>
                </form>
            </div>
        </div>
    @endforeach
</div>
</div>