@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div  class="push-left">
    <div class="push-left d-flex align-items-center">
        <div class=" my-auto px-5">
            <h3  class="my-5"> id  : {{$facts->id}}</h3>
            <h3  class="my-5"> nombre  : {{$facts->nombre}}</h3>
            <h3  class="my-5"> logo : <i class="{{$facts->logo}}"></i>
            </h3>
            <h3  class="my-5"> gras : {{$facts->gras}}</h3>
            <h3  class="my-5"> normal : {{$facts->normal}}</h3>
        </div>
    </div>
</div>
@endsection´