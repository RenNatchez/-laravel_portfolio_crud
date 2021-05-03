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
                <input value="{{$skill->name}}" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Entrer un nom valide">
                    @error('name')
                    <span class="invalid-feedback pl-3"> <strong>Entrez un nom valide</strong></span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input value="{{$skill->level}}" type="text" class="form-control @error('level') is-invalid @enderror" id="level" name="level"
                    placeholder="Entrer un level valide">
                    @error('level')
                    <span class="invalid-feedback pl-3"> <strong>Entrez un level valide</strong></span>
                    @enderror
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection´
