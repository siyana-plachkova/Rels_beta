@extends('layouts.base_user')

@section('title')
    Messages
@endsection

@section('content')

    <div class="jumbotron index-container">
        <div class="container">
            <div class="col-xs-3 col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item disabled">
                        History
                    </a>
                      <a href="#" class="list-group-item">Anna</a>
                      <a href="#" class="list-group-item">Lana</a>
                      <a href="#" class="list-group-item">Caroline</a>
                      <a href="#" class="list-group-item">Maggie</a>
                </div>
            </div>
            <div class="col-xs-9 col-md-9">
                <div class="jumbotron gallery-messages-container-dark">
                </div>
            </div>
        </div>
    </div>

@endsection
