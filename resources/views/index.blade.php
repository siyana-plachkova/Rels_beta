@extends('layouts.base')

@section('title')
    Welcome
@endsection

@section('content')
    <div class="jumbotron index-container">
        <h1>Welcome to Rels</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <div class="form-container">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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