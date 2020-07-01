@extends('layout.second')

@section('title' , 'Jajan | Daftar')

@section('container')

<div class="container">
    <form action="/register" method="post">
        @csrf
        <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" class="form-control" id="name" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>

@endsection()