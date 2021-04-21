@extends('layout/template)

@section('content')
<div id="app">
    <app></app>
    <a href="/welcome">Welcome Page</a>
</div>

<script src="{{ mix('js/app.js') }}"></script>

@endsection
