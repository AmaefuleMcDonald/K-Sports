@extends('layouts.app')

@section('content')
<div class="news-article" style="background-image: url('https://i2-prod.mirror.co.uk/incoming/article32465280.ece/ALTERNATES/s1200d/0_Sheffield-United-v-AFC-Bournemouth-Premier-League.jpg'); width: 100%; height: 100vh; background-size: cover; background-position: fixed; background-repeat: no-repeat;  min-width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="news-content">
                    <h1>{{ __('messages.Headline2') }}</h1>
                    <p>{{ __('messages.News2') }}</p>
                    <!-- Add more of your news content here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection