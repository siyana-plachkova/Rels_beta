@extends('layouts.base')

@section('style')
    <link rel="stylesheet" type="text/css" href="/css/profile.css">
@endsection

@section('searchbar')
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search for a friend">
      </div>
      <button type="submit" class="btn btn-default btn-red search-btn-margin">Search</button>
    </form>
@endsection

@section('notifications')
    <li class="pull-left" role="presentation"><a href="#"><i class="fa fa-envelope"></i></a></li>
    <li class="pull-left" role="presentation"><a href="#"><i class="fa fa-heart"></i></a></li>
@endsection
