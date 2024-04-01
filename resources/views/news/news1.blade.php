@extends('layouts.app')

@section('content')
<div class="news-article" style="background-image: url('https://e3.365dm.com/24/01/2048x1152/skynews-gianni-infantino-fifa_6428472.jpg?20240121140016'); width: 100%; height: 100vh; background-size: cover; background-position: fixed; background-repeat: no-repeat;  min-width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="news-content">
                    <h1>{{ __('messages.Headline1') }}</h1>
                    <p>{{ __('messages.News1') }}</p>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
