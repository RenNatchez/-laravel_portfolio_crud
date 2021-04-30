@extends('layouts.admin')
@section('content')
@include('admin.partials.header')
<div class="push-left">
    <div class="push-left d-flex align-items-center">
        <form method="POST" action="{{route('service.store')}}" class="w-50 mx-auto my-5 px-5">
            @csrf
            <div class="form-group">
                <label for="image">Choix du filtre</label>
                <select class="form-control" name="image">
                    <option value="assets/img/portfolio/portfolio-1.jpg">image 1</option>
                    <option value="assets/img/portfolio/portfolio-2.jpg">image 2</option>
                    <option value="assets/img/portfolio/portfolio-3.jpg">image 3</option>
                    <option value="assets/img/portfolio/portfolio-4.jpg">image 4</option>
                    <option value="assets/img/portfolio/portfolio-5.jpg">image 5</option>
                    <option value="assets/img/portfolio/portfolio-6.jpg">image 6</option>
                    <option value="assets/img/portfolio/portfolio-7.jpg">image 7</option>
                    <option value="assets/img/portfolio/portfolio-8.jpg">image 8</option>
                    <option value="assets/img/portfolio/portfolio-9.jpg">image 9</option>
                </select>
            <div class="form-group">
                <label for="filter">Choix du filtre</label>
                <select class="form-control" name="filter">
                    <option value="filter-app">app</option>
                    <option value="filter-web">web</option>
                    <option value="filter-card">card</option>
                </select>
              </div>
            <div class="form-group">
                <label for="lien">lien</label>
                <input type="text" class="form-control" id="lien" name="lien"
                    placeholder="Entrer une description">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection´
