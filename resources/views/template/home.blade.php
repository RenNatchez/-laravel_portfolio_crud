@extends('layouts.index')
@section('content')
@include('template.partials.header')
@include('template.partials.banner')
<main id="main">
    @include('template.partials.about')
    @include('template.partials.facts')
    @include('template.partials.skill')
    @include('template.partials.service')
    @include('template.partials.portfolio')
    @include('template.partials.footer')
</main>
@endsection