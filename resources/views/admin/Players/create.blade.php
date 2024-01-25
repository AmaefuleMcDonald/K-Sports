<!-- create a new player -->

@extends('layouts.app')

@section('content')
    <h1>Create New Player</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>Create New Player</h1>
    <form action="{{ route('admin.players.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="ratings">Ratings:</label>
        <input type="text" id="ratings" name="ratings" required>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required>

        <label for="version">Version:</label>
        <input type="text" id="version" name="version" required>
        
        <label for="ps">PS:</label>
        <input type="text" id="ps" name="ps" required>

        <label for="ski">SKI:</label>
        <input type="text" id="ski" name="ski" required>

        <label for="wf">WF:</label>
        <input type="text" id="wf" name="wf" required>

        <label for="wr">WR:</label>
        <input type="text" id="wr" name="wr" required>

        <label for="pac">PAC:</label>
        <input type="text" id="pac" name="pac" required>

        <label for="sho">SHO:</label>
        <input type="text" id="sho" name="sho" required>

        <label for="pas">PAS:</label>
        <input type="text" id="pas" name="pas" required>

        <label for="dri">DRI:</label>
        <input type="text" id="dri" name="dri" required>

        <label for="def">DEF:</label>
        <input type="text" id="def" name="def" required>

        <label for="phy">PHY:</label>
        <input type="text" id="phy" name="phy" required>

        <label for="body">Body:</label>
        <input type="text" id="body" name="body" required>

        <label for="popularity">Popularity:</label>
        <input type="text" id="popularity" name="popularity" required>

        <label for="bs">BS:</label>
        <input type="text" id="bs" name="bs" required>

        <label for="igs">IGS:</label>
        <input type="text" id="igs" name="igs" required>

        <label for="club">Club:</label>
        <input type="text" id="club" name="club" required>

        <label for="league">League:</label>
        <input type="text" id="league" name="league" required>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required>

        <button type="submit">Create Player</button>
    </form>
@endsection
