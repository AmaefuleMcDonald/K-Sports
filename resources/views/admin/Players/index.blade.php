<!-- Listing players -->

@extends('layouts.app')

@section('content')
    <h1>Player List</h1>
    <a href="{{ route('admin.players.create') }}">Create New Player</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Ratings</th>
                <th>Position</th>
                <th>Version</th>
                <th>PS</th>
                <th>SKI</th>
                <th>WF</th>
                <th>WR</th>
                <th>PAC</th>
                <th>SHO</th>
                <th>PAS</th>
                <th>DRI</th>
                <th>DEF</th>
                <th>PHY</th>
                <th>Body</th>
                <th>Popularity</th>
                <th>BS</th>
                <th>IGS</th>
                <th>Club</th>
                <th>League</th>
                <th>Country</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->ratings }}</td>
                    <td>{{ $player->position }}</td>
                    <td>{{ $player->version }}</td>
                    <td>{{ $player->ps}}</td>
                    <td>{{ $player->ski }}</td>
                    <td>{{ $player->wf }}</td>
                    <td>{{ $player->wr }}</td>
                    <td>{{ $player->pac }}</td>
                    <td>{{ $player->sho }}</td>
                    <td>{{ $player->pas }}</td>
                    <td>{{ $player->dri }}</td>
                    <td>{{ $player->def }}</td>
                    <td>{{ $player->phy }}</td>
                    <td>{{ $player->body }}</td>
                    <td>{{ $player->popularity }}</td>
                    <td>{{ $player->bs }}</td>
                    <td>{{ $player->igs }}</td>
                    <td>{{ $player->club }}</td>
                    <td>{{ $player->league }}</td>
                    <td>{{ $player->country }}</td>
                   
                    <td>
                        <a href="{{ route('admin.players.edit', $player) }}">Edit</a>
                        <form action="{{ route('admin.players.delete', $player) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
