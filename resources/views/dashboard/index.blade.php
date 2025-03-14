@extends('dashboard.layout.main')

@section('content')
<div class="title-dashboard">
    <h1>Welcome!, {{ auth()->user()->username }} </h1>
    <p>Dashboard BookOnline</p>
</div>
@endsection
