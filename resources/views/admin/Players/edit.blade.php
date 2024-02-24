@extends('layouts.app')

@section('content')
    <h1>Edit Player</h1>
    <form action="{{ route('andrew-bruce.update', $player) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $player->name }}" required>

        <label for="ratings">Ratings:</label>
        <input type="text" id="ratings" name="ratings" value="{{ $player->ratings }}" required>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" value="{{ $player->position }}" required>

        <label for="version">Version:</label>
        <input type="text" id="version" name="version" value="{{ $player->version }}" required>

        <label for="ps">PS:</label>
        <input type="text" id="ps" name="ps" value="{{ $player->ps }}" required>

        <label for="ski">SKI:</label>
        <input type="text" id="ski" name="ski" value="{{ $player->ski }}" required>

        <label for="wf">WF:</label>
        <input type="text" id="wf" name="wf" value="{{ $player->wf }}" required>

        <label for="wr">WR:</label>
        <input type="text" id="wr" name="wr" value="{{ $player->wr }}" required>

        <label for="pac">PAC:</label>
        <input type="text" id="pac" name="pac" value="{{ $player->pac }}" required>

        <label for="sho">SHO:</label>
        <input type="text" id="sho" name="sho" value="{{ $player->sho }}" required>

        <label for="pas">PAS:</label>
        <input type="text" id="pas" name="pas" value="{{ $player->pas }}" required>

        <label for="dri">DRI:</label>
        <input type="text" id="dri" name="dri" value="{{ $player->dri }}" required>

        <label for="def">DEF:</label>
        <input type="text" id="def" name="def" value="{{ $player->def }}" required>

        <label for="phy">PHY:</label>
        <input type="text" id="phy" name="phy" value="{{ $player->phy }}" required>

        <label for="body">Body:</label>
        <input type="text" id="body" name="body" value="{{ $player->body }}" required>

        <label for="popularity">Popularity:</label>
        <input type="text" id="popularity" name="popularity" value="{{ $player->popularity }}" required>

        <label for="bs">BS:</label>
        <input type="text" id="bs" name="bs" value="{{ $player->bs }}" required>

        <label for="igs">IGS:</label>
        <input type="text" id="igs" name="igs" value="{{ $player->igs }}" required>

        <label for="club">Club:</label>
        <input type="text" id="club" name="club" value="{{ $player->club }}" required>

        <label for="league">League:</label>
        <input type="text" id="league" name="league" value="{{ $player->league }}" required>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="{{ $player->country }}" required>

        <button type="submit">Update Player</button>
    </form>
@endsection
