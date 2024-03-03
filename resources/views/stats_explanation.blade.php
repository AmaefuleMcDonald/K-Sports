{{-- resources/views/stats_explanation.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Player Stats Explanation</h1>
    <div class="list-group">
        <p class="list-group-item"><strong>Name:</strong> {{ __('messages.nameexp') }}</p>
        <p class="list-group-item"><strong>Ratings:</strong> {{ __('messages.ratingexp') }}</p>
        <p class="list-group-item"><strong>Position:</strong>{{ __('messages.positionexp') }}</p>
        <p class="list-group-item"><strong>Version:</strong>{{ __('messages.versionexp') }}</p>
        <p class="list-group-item"><strong>PS:</strong>{{ __('messages.psexp') }}</p>
        <p class="list-group-item"><strong>SKI:</strong>{{ __('messages.skiexp') }}</p>
        <p class="list-group-item"><strong>WF:</strong> {{ __('messages.wfexp') }}</p>
        <p class="list-group-item"><strong>WR:</strong> {{ __('messages.wrexp') }}</p>
        <p class="list-group-item"><strong>PAC:</strong>{{ __('messages.pacexp') }}</p>
        <p class="list-group-item"><strong>SHO:</strong>{{ __('messages.shoexp') }}</p>
        <p class="list-group-item"><strong>PAS:</strong>{{ __('messages.pasexp') }}</p>
        <p class="list-group-item"><strong>DRI:</strong>{{ __('messages.driexp') }}</p>
        <p class="list-group-item"><strong>DEF:</strong> {{ __('messages.defexp') }}</p>
        <p class="list-group-item"><strong>PHY:</strong> {{ __('messages.phyexp') }}</p>
        <p class="list-group-item"><strong>Body:</strong> {{ __('messages.bodyexp') }}</p>
        <p class="list-group-item"><strong>Popularity:</strong>{{ __('messages.popularityexp') }}</p>
        <p class="list-group-item"><strong>BS:</strong> {{ __('messages.bsexp') }}</p>
        <p class="list-group-item"><strong>IGS:</strong> {{ __('messages.igsexp') }}</p>
        <p class="list-group-item"><strong>Club:</strong> {{ __('messages.clubexp') }}</p>
        <p class="list-group-item"><strong>League:</strong> {{ __('messages.leagueexp') }}</p>
        <p class="list-group-item"><strong>Country:</strong> {{ __('messages.countryexp') }}</p>
    </div>
</div>
@endsection
