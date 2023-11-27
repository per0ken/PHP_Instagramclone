@extends('layouts.app')

@section('content')
<div class="container d-flex" style="padding-left: 6vw">
    <div class="row p-5">
        <div class="col-3"></div>
        <img src="{{ $user->profile->profileImage() }}" style="height: 160px; width: 190px;" class="rounded-circle w-100 h-100">
    </div>
    <div class="col-9 pt-5" style="padding-left: 2vw;">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">
                <button class="btn btn-primary">Edit Profile</button>
            </a>
            @endcan

            @can('update', $user->profile)
                <a href="/p/create">
                    <button class="btn btn-primary">Add New Post</button>
                </a>
            @endcan
        </div>

        <div class="d-flex">
            <div style="padding-right: 25px;"><strong><b>{{ $user->posts->count() }}</b></strong> bejegyzés</div>
            <div style="padding-right: 25px;"><strong><b>315</b></strong> követő</div>
            <div style="padding-right: 25px;"><strong><b>362</b></strong> követés</div>
        </div>
        <div class="pt-2"><b>{{ $user->profile->title }}</b></div>
        <div class="pt-2">{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
</div>

<div class="container" style="border-bottom: solid 1px #D3D3D3;"></div>

<div class="container pt-5">
    <div class="row">
        @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100" style="object-fit: cover; height: 500px; padding-bottom: 25px">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
