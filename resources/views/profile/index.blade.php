@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                <hr color="#c0c0c0">
                @foreach($profiles as $profile)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $profile->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    {{ str_limit($profile->name, 150) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($profile->gender, 1500) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($profile->hobby, 1500) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($profile->introduction, 1500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
@endsection
