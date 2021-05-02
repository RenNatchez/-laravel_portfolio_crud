@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div class="push-left">
    <div class="push-left d-flex align-items-center">
        <form method="POST" action="{{route('fact.store')}}" class="w-50 mx-auto my-5 px-5">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                    placeholder="Entrer un nombre">
            </div>
            <div class="form-group">
                <label for="gras">Gras</label>
                <input type="text" class="form-control" id="gras" name="gras"
                    placeholder="Entrer un gras">
            </div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="text" class="form-control" id="logo" name="logo"
                    placeholder="Entrer un nombre">
            </div>
            <div class="form-group">
                <label for="normal">Normal</label>
                <input type="text" class="form-control" id="normal" name="normal"
                    placeholder="Entrer un nombre">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection´
