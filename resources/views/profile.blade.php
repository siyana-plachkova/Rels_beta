@extends('layouts.base_user')

@section('title')
    Profile
@endsection

@section('content')
    <div class="jumbotron index-container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ $user->profile->profile_photo->photo_url }}" alt="profile_pic" class="img-rounded">
                <h4>{{ $user->profile->name }} {{ $user->profile->surname }}</h4>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Bio</h4>

                        <h5 class="usr-info">
                            Gender:
                            @if ($user->profile->gender == 'male')
                                <i class="fa fa-mars"></i>
                            @elseif ($user->profile->gender == 'female')
                                <i class="fa fa-venus"></i>
                            @elseif ($user->profile->gender == 'other')
                                <i class="fa fa-genderless"></i>
                            @endif
                        </h5>
                        <h5 class="usr-info">Birth date: {{ $user->profile->birth_date }}</h5>
                        <h5 class="usr-info">Location: {{ $user->profile->location }}</h5>
                        <h5 class="usr-info">Interested in:
                            @if ($user->profile->interested_in == 'male')
                                <i class="fa fa-mars"></i>
                            @elseif ($user->profile->interested_in == 'female')
                                <i class="fa fa-venus"></i>
                            @elseif ($user->profile->interested_in == 'other')
                                <i class="fa fa-genderless"></i>
                            @endif
                        </h5>

                        <p class="color-red">{{ $user->profile->description }}</p>
                    </div>
                </div>
            </div>
        </div>

            <div class="jumbotron gallery-messages-container-dark">
                <div class="container">
                    @if ($is_user)
                    <div class="row">
                        <form action="/profile/images/add" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-xs-10">
                                <div class="input-group bottom-margin">
                                    <span class="input-group-addon">Add image to gallery</span>
                                    <input type="text" class="form-control" id="image_url" name="image_url">
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-small btn-red">Add</button>
                            </div>
                        </form>
                    </div>
                    @endif
                    <div class="row">
                        @foreach ($user->profile->images as $image)
                        <div class="col-xs-6 col-md-3">
                            <div class="thumbnail">
                              <div style="background: url('{{ $image->photo_url }}') no-repeat; background-size: cover; background-position: 50% 50%;
                                          width: 180px; height: 200px; margin: 0; padding: 0; cursor: pointer;" onclick="window.location='{{ $image->photo_url }}'"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

@endsection
