{{-- resources/views/admin/players/free_agents.blade.php --}}

@extends('layouts.app') 

@section('content')
<div class="container">
    <h1>{{ __('messages.free') }}</h1>
    <div class="list-group">
        @foreach ($freeAgents as $player)
            <div class="list-group-item">
                <h5>{{ $player->name }} <span class="badge badge-info">{{ __('messages.free') }}</span></h5>
               

<p> Ratings: {{ $player->ratings }}
<p>Position: {{ $player->position }}
<p>Version:{{ $player->version }}
<p>PS:{{ $player->ps}}
<p>SKI:{{ $player->ski }}
<p>WF:{{ $player->wf }}
<p>WR:{{ $player->wr }}
<p>PAC:{{ $player->pac }}
<p>SHO:{{ $player->sho }}
<p>PAS:{{ $player->pas }}
<p>DRI:{{ $player->dri }}
<p>DEF:{{ $player->def }}
<p>PHY:{{ $player->phy }}
<p>Body:{{ $player->body }}
<p>Popularity:{{ $player->popularity }}
<p>BS:{{ $player->bs }}
<p>IGS:{{ $player->igs }}
<p>Club:{{ $player->club }}
<p>League:{{ $player->league }}
<p>Country: <span class="flag-icon flag-icon-{{ strtolower(countryNameToCode($player->country)) }}"></span> {{ $player->country }}
 <!-- Edit button, only shown for Andrew Bruce if the user is an admin -->
 
                     <!--<a href="{{ route('andrew-bruce.edit', $player->id) }}" class="btn btn-primary">Edit</a>-->
                     <!--<a href="{{ route('andrew-bruce.edit', ['id' => $player->id]) }}" class="btn btn-primary">Edit Andrew Bruce</a>-->
             
            </div>
        @endforeach
    </div>
</div>
@endsection
