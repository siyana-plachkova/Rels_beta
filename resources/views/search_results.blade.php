@extends('layouts.base_user')

@section('title')
    Search results
@endsection

@section('content')
    <div class="jumbotron index-container">
        @foreach ($results as $result)
        <div class="row">
            <div class="col-md-3">
                <img src="{{ $result->profile_photo->photo_url }}" alt="profile_pic" class="img-rounded">
                <h4><a href="/profile/{{ $result->user->id }}" style="color: #fff; text-decoration: none;">{{ $result->name }} {{ $result->surname }}</a></h4>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Bio</h4>

                        <h5 class="usr-info">
                            Gender:
                            @if ($result->gender == 'male')
                                <i class="fa fa-mars"></i>
                            @elseif ($result->gender == 'female')
                                <i class="fa fa-venus"></i>
                            @elseif ($result->gender == 'other')
                                <i class="fa fa-genderless"></i>
                            @endif
                        </h5>
                        <h5 class="usr-info">Birth date: {{ $result->birth_date }}</h5>
                        <h5 class="usr-info">Location: {{ $result->location }}</h5>
                        <h5 class="usr-info">Interested in:
                            @if ($result->interested_in == 'male')
                                <i class="fa fa-mars"></i>
                            @elseif ($result->interested_in == 'female')
                                <i class="fa fa-venus"></i>
                            @elseif ($result->interested_in == 'other')
                                <i class="fa fa-genderless"></i>
                            @endif
                        </h5>

                        <p class="color-red">{{ $result->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
