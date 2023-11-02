@extends('layouts.app')

@section('content')
<div class="container d-flex" style="padding-left: 6vw">
    <div class="row p-5">
        <div class="col-3"></div>
        <img src="/images/profkep.jpg" style="height: 160px; width: 190px;" class="rounded-circle">
    </div>
    <div class="col-9 pt-5" style="padding-left: 2vw;">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="#">Add New Post</a>
        </div>
        <div class="d-flex">
            <div style="padding-right: 25px;"><strong><b>3</b></strong> bejegyzés</div>
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
        <div class="col-4">
            <img src="/images/profkep.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/images/profkep.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/images/profkep.jpg" class="w-100">
        </div>
</div>
@endsection
