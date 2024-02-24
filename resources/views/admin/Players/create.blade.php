{{-- resources/views/admin/players/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Player</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.players.store') }}" method="POST">
    @csrf
            <!-- Name Field -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <!-- Ratings Field -->
            <label for="ratings">Ratings:</label>
            <input type="number" id="ratings" name="ratings" required>

            <!-- Position Field -->
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" required>

            <!-- Other fields... -->
            <!-- Version Field -->
            <label for="version">Version:</label>
            <input type="text" id="version" name="version" required>

            <!-- PS Field -->
            <label for="ps">PS:</label>
            <input type="text" id="ps" name="ps">

            <!-- SKI Field -->
            <label for="ski">SKI:</label>
            <input type="number" id="ski" name="ski" required>

            <!-- WF Field -->
            <label for="wf">WF:</label>
            <input type="number" id="wf" name="wf" required>

            <!-- WR Field -->
            <label for="wr">WR:</label>
            <input type="text" id="wr" name="wr" required>

            <!-- PAC Field -->
            <label for="pac">PAC:</label>
            <input type="number" id="pac" name="pac" required>

            <!-- SHO Field -->
            <label for="sho">SHO:</label>
            <input type="number" id="sho" name="sho" required>

            <!-- PAS Field -->
            <label for="pas">PAS:</label>
            <input type="number" id="pas" name="pas" required>

            <!-- DRI Field -->
            <label for="dri">DRI:</label>
            <input type="number" id="dri" name="dri" required>

            <!-- DEF Field -->
            <label for="def">DEF:</label>
            <input type="number" id="def" name="def" required>

            <!-- PHY Field -->
            <label for="phy">PHY:</label>
            <input type="number" id="phy" name="phy" required>

            <!-- Body Field -->
            <label for="body">Body:</label>
            <input type="text" id="body" name="body" required>

            <!-- Popularity Field -->
            <label for="popularity">Popularity:</label>
            <input type="number" id="popularity" name="popularity" required>

            <!-- BS Field -->
            <label for="bs">BS:</label>
            <input type="number" id="bs" name="bs" required>

            <!-- IGS Field -->
            <label for="igs">IGS:</label>
            <input type="number" id="igs" name="igs" required>

            <!-- Club Field -->
            <label for="club">Club:</label>
            <input type="text" id="club" name="club" required>

            <!-- League Field -->
            <label for="league">League:</label>
            <input type="text" id="league" name="league" required>

            <!-- Country Field -->
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required>

            <button type="submit" class="btn btn-primary">Create Player</button>
        </form>
    </div>
@endsection
