@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div  class="push-left">
    <div class="push-left d-flex align-items-center">
        <div class=" my-auto px-5">
            <h3  class="my-5"> nom  : {{$skill->name}}</h3>
            <h3  class="my-5"> niveau  : {{$skill->level}}</h3>
        </div>
    </div>
</div>
@endsection´