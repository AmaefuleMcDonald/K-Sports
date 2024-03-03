{{-- resources/views/players/search.blade.php --}}
@extends('layouts.app')


@section('content')

<div class="loading-container" sstyle="opacity: 0;"> <!-- Initially hidden -->
  <div class="circle-loader"></div>
  <p class="loading-text">Loading<span>.</span><span>.</span><span>.</span></p>
</div>



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
                            <h5 class="card-title">{{ $player->name }}
                                @auth
                                    @if (str_contains($player->name, 'Andrew Bruce'))
                                        <span class="badge badge-info">{{ __('messages.free') }}</span> {{-- Customize this badge as needed --}}
                                        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                                    @endif
                                @endauth
                            </h5>
                            {{-- Inside your loop for displaying player cards --}}
                            <form action="{{ route('players.toggleFavorite', $player->id) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">
    @if(auth()->check() && auth()->user()->favoritePlayers->contains($player->id))
            Remove from favorites
        @else
            Favorite <i class="fas fa-star"></i>
        @endif
    </button>
</form>


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
                            <p class="card-text">DEF: {{ $player->def }}</p>
                            <p class="card-text">PHY: {{ $player->phy }}</p>
                            <p class="card-text">Body: {{ $player->body }}</p>
                            <p class="card-text">Popularity: {{ $player->popularity }}</p>
                            <p class="card-text">BS: {{ $player->bs }}</p>
                            <p class="card-text">IGS: {{ $player->igs }}</p>
                            <p class="card-text">League: {{ $player->league }}</p>
                            <p class="card-text">Country: <span class="flag-icon flag-icon-{{ strtolower(countryNameToCode($player->country)) }}"></span> {{ $player->country }}</p>
                            <p class="card-text">Club: {{ $player->club }}</p>

                            <p class="card-text">Created At: {{ $player->created_at->toDayDateTimeString() }}</p>
                            <p class="card-text">Last Updated: {{ $player->updated_at->toDayDateTimeString() }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
@section('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.loading-container').style.display = 'none';
  });
</script>
@yield('scripts')
@endsection