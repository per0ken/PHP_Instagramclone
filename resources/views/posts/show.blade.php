@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" style="object-fit: cover;">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div style="padding-right: 5px">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle w-100" style="max-width: 50px;">
                    </div>
                    <div>
                        <div style="font-weight: bold;">
                            <a style="text-decoration: none; padding-right: 10px" href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                                <span style="padding-right: 10px"> | </span>
                            <a href="#">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

                <p>
                    <span style="font-weight: bold;">
                        <a style="text-decoration: none;" href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
#@endsection
