@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div class="push-left">
    <div class="push-left d-flex align-items-center">
        <form method="POST" action="{{route('skill.udapte', $skill->id)}}" class="w-50 mx-auto my-5 px-5">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom</label>
                <input value="{{$skill->name}}" type="text" class="form-control" id="name" name="name"
                    placeholder="Entrer le nom">
            </div>
            <div class="form-group">
                <label for="level">Nom</label>
                <input value="{{$skill->name}}" type="number" class="form-control" id="level" name="level"
                    placeholder="Entrer le nombre">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection´
