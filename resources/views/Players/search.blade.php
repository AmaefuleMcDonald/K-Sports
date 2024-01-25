<!-- resources/views/players/search.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search Results</h1>

        @if($players->isEmpty())
            <p>No players found.</p>
        @else
            <div class="row">
                @foreach ($players as $player)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $player->name }}</h5>                               
                                <p class="card-text">Rating: {{ $player->ratings }}</p>
                                <p class="card-text">Position: {{ $player->position }}</p>
                                <p class="card-text">Version: {{ $player->version }}</p>
                                <p class="card-text">PS: {{ $player->ps }}</p>
                                <p class="card-text">SKI: {{ $player->ski }}</p>
                                <p class="card-text">WF: {{ $player->wf }}</p>
                                <p class="card-text">WR: {{ $player->wr }}</p>
                                <p class="card-text">PAC: {{ $player->pac }}</p>
                                <p class="card-text">SHO: {{ $player->sho }}</p>
                                <p class="card-text">PAS: {{ $player->pas }}</p>
                                <p class="card-text">DRI: {{ $player->dri }}</p>
                                <p class="card-text">DEF: {{ $player->def}}</p>
                                <p class="card-text">PHY: {{ $player->phy }}</p>
                                <p class="card-text">Body: {{ $player->body }}</p>
                                <p class="card-text">Popularity: {{ $player->popularity }}</p>
                                <p class="card-text">BS: {{ $player->bs }}</p>
                                <p class="card-text">IGS: {{ $player->igs }}</p>
                                <p class="card-text">League: {{ $player->league }}</p>
                                <p class="card-text">Country: {{ $player->country }}</p>
                                <p class="card-text">Club: {{ $player->club }}</p>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
