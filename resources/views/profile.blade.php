@extends('layouts.base_user')

@section('title')
    Profile
@endsection

@section('content')
    <div class="jumbotron index-container">
        <div class="row">
            <div class="col-md-3">
                <img src="/images/pic.jpg" alt="profile_pic" class="img-rounded">
                <h4>Username</h4>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Bio</h4>

                        <h5 class="usr-info">Gender: <i class="fa fa-mars"></i></h5>
                        <h5 class="usr-info">Birth date: 31.03.1989</h5>
                        <h5 class="usr-info">Age: 26</h5>
                        <h5 class="usr-info">Location: London, UK</h5>
                        <h5 class="usr-info">Interested in: Women</h5>

                        <p class="color-red">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>

            <div class="jumbotron gallery-messages-container-dark">
                <div class="container">
                    <div cass="row">
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                    </div>
                    <div cass="row">
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                    </div>
                    <div cass="row">
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="/images/pic.jpg" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection
