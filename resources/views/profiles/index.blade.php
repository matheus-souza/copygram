@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://via.placeholder.com/150" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>6</strong> posts</div>
                <div class="pr-5"><strong>66</strong> followers</div>
                <div class="pr-5"><strong>666</strong> folling</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://via.placeholder.com/150" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://via.placeholder.com/150" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://via.placeholder.com/150" class="w-100">
        </div>
    </div>
</div>
@endsection
