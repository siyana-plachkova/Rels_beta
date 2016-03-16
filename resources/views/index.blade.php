@extends('layouts.base')

@section('title')
    Welcome
@endsection

@section('content')
    <div class="jumbotron index-container">
        <h1>Welcome to Rels</h1>
        <p class="lead">Register for free to meet new people and start dating today!</p>
        <div class="form-container">
            <form method="post" action="/auth/login">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-default btn-red">Log In</button>
            </form>
        </div>
        <p class="join-btn"><a class="btn btn-lg btn-success btn-red" href="/registration" role="button">Join</a></p>
     </div>
@endsection