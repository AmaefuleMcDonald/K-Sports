@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Andrew Bruce - Free Agent</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('andrew-bruce.update', ['id' => $player->id]) }}" method="POST">
    
        @csrf
        @method('PUT') 
        <div class="form-group">
            <label for="ratings">Ratings</label>
            <input type="number" class="form-control" id="ratings" name="ratings" value="{{ old('ratings', $player->ratings) }}" required>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ old('position', $player->position) }}" required>
        </div>

        <div class="form-group">
            <label for="version">Version</label>
            <input type="text" class="form-control" id="version" name="version" value="{{ old('version', $player->version) }}" required>
        </div>

        <div class="form-group">
            <label for="ps">PS</label>
            <input type="text" class="form-control" id="ps" name="ps" value="{{ old('ps', $player->ps) }}">
        </div>

        <div class="form-group">
            <label for="ski">SKI</label>
            <input type="number" class="form-control" id="ski" name="ski" value="{{ old('ski', $player->ski) }}" required>
        </div>

        <div class="form-group">
            <label for="wf">WF</label>
            <input type="number" class="form-control" id="wf" name="wf" value="{{ old('wf', $player->wf) }}" required>
        </div>

        <div class="form-group">
            <label for="wr">WR</label>
            <input type="text" class="form-control" id="wr" name="wr" value="{{ old('wr', $player->wr) }}" required>
        </div>

        <div class="form-group">
            <label for="pac">PAC</label>
            <input type="number" class="form-control" id="pac" name="pac" value="{{ old('pac', $player->pac) }}" required>
        </div>

        <div class="form-group">
    <label for="sho">SHO</label>
    <input type="number" class="form-control" id="sho" name="sho" value="{{ old('sho', $player->sho) }}" required>
</div>

<div class="form-group">
    <label for="pas">PAS</label>
    <input type="number" class="form-control" id="pas" name="pas" value="{{ old('pas', $player->pas) }}" required>
</div>

<div class="form-group">
    <label for="dri">DRI</label>
    <input type="number" class="form-control" id="dri" name="dri" value="{{ old('dri', $player->dri) }}" required>
</div>

<div class="form-group">
    <label for="def">DEF</label>
    <input type="number" class="form-control" id="def" name="def" value="{{ old('def', $player->def) }}" required>
</div>

<div class="form-group">
    <label for="phy">PHY</label>
    <input type="number" class="form-control" id="phy" name="phy" value="{{ old('phy', $player->phy) }}" required>
</div>

<div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" id="body" name="body" value="{{ old('body', $player->body) }}" required>
</div>

<div class="form-group">
    <label for="popularity">Popularity</label>
    <input type="number" class="form-control" id="popularity" name="popularity" value="{{ old('popularity', $player->popularity) }}" required>
</div>

<div class="form-group">
    <label for="bs">BS</label>
    <input type="number" class="form-control" id="bs" name="bs" value="{{ old('bs', $player->bs) }}" required>
</div>

<div class="form-group">
    <label for="igs">IGS</label>
    <input type="number" class="form-control" id="igs" name="igs" value="{{ old('igs', $player->igs) }}" required>
</div>

<div class="form-group">
    <label for="club">Club</label>
    <input type="text" class="form-control" id="club" name="club" value="{{ old('club', $player->club) }}" required>
</div>

<div class="form-group">
    <label for="league">League</label>
    <input type="text" class="form-control" id="league" name="league" value="{{ old('league', $player->league) }}" required>
</div>

<div class="form-group">
    <label for="country">Country</label>
    <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $player->country) }}" required>
</div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
