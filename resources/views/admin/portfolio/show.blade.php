@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div  class="push-left">
    <div class="push-left d-flex align-items-center">
        <img src="{{asset($portfolio->image)}}" alt="">
        <div class=" my-auto px-5">
            <h3  class="my-5"> id  : {{$portfolio->id}}</h3>
            <h3  class="my-5"> filter  : {{$portfolio->filter}}</h3>
            <h3  class="my-5"> image : {{$portfolio->image}}</h3>
            <h3  class="my-5"> lien : {{$portfolio->lien}}</h3>
        </div>
    </div>
</div>
@endsection´