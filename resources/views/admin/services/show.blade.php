@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div  class="push-left">
    <div class="push-left d-flex align-items-center">
        <div class="push-left d-flex align-items-center ">
            <div class=" my-auto px-5">
                <h3  class="my-5"> id  : {{$service->id}}</h3>
                <h3  class="my-5"> Titre  : {{$service->titre}}</h3>
                <h3  class="my-5">  Description: {{$service->description}}</h3>
            </div>
        </div>
</div>
@endsection´