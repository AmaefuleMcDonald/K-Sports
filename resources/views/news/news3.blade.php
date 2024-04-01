@extends('layouts.app')

@section('content')
<div class="news-article" style="background-image: url('https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--db315918-4e56-4f4d-a218-02eb8f4005e1/GRUPO_ALEGRIA_VILLARREAL_RM_30032024_WhatsApp_Image_2024_03_30_at_7_57_41_PM_16X9.app.png?preferwebp=true&width=1440'); width: 100%; height: 100vh; background-size: cover; background-position: fixed; background-repeat: no-repeat;  min-width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="news-content">
                    <h1>{{ __('messages.Headline3') }}</h1>
                    <p>{{ __('messages.News3') }} 
</p>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection