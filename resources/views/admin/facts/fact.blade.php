@extends('layouts.admin')
@include('layouts.flash')
@section('content')
@include('admin.partials.header')
<div class="container push">
    <div  class="bg-white px-5">
        <div class="d-flex justify-content-between py-3">
            <h1 class="m-0 my-auto display-3">Facts</h1>
            <div  class="d-flex  py-3">
                <a href="{{route('admin.home')}}" class="mr-3"><button class="btn btn-dark"><h2 class="display-5">Retour</h2></button></a>
                <a href="{{route('fact.create')}}" class="ml-3"><button class="btn btn-dark btn-darkblu"><h2 class="display-5">Ajouter</h2></button></a>
            </div>
        </div>
        <div class="bg-dark pt-1"></div>
        @foreach ($facts as $fact)
        <div class="border border-secondary my-3 d-flex align-items-center justify-content-between  border-top-0  border-left-0 border-right-0">
            <div class="d-flex align-items-center">
                <h5 class="px-3 py-4 mr-5"> ID : {{$fact->id}}</h5>
                <h5 class="px-3 py-4 mr-5"> Nom : {{$fact->gras}}</h5>
                <h5 class="px-3 py-4 mr-5"> Logo : <i class="{{$fact->logo}}"></i></h5>

            </div>
            <div class="d-flex w-25 justify-content-between">
                <a href="{{route('fact.show',$fact->id)}}"><button class="btn btn-primary pt-3">
                        <h6 class="display-5">Voir</h6>
                    </button></a>
                <a href="{{route('fact.edit', $fact->id)}}"><button class="btn btn-success pt-3">
                        <h6 class="display-5">Modif</h6>
                    </button></a>
                <form action={{route('fact.destroy', $fact->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger pt-3 " type="submit">
                        <h6>Suprimer</h6>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection┬┤