@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://via.placeholder.com/150" class="rounded-circle">
        </div>
        <div class="col-9 pt-5 pr-5">
            <div>
                <h1>static_username</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>6</strong> posts</div>
                <div class="pr-5"><strong>66</strong> followers</div>
                <div class="pr-5"><strong>666</strong> folling</div>
            </div>
            <div class="pt-4 font-weight-bold">Static Name Test</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, eum provident? Atque, culpa dolorum eligendi esse in ipsam iure nesciunt nisi perspiciatis qui.</div>
            <div><a href="#">www.staticsite.com</a></div>
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
