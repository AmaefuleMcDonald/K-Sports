{{-- resources/views/stats_explanation.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Player Stats Explanation</h1>
    <div class="list-group">
        <p class="list-group-item"><strong>Name:</strong> The name of the football player.</p>
        <p class="list-group-item"><strong>Ratings:</strong> The overall rating of the player in FIFA 23, representing the player's overall skill level.</p>
        <p class="list-group-item"><strong>Position:</strong> The primary playing position(s) of the player.</p>
        <p class="list-group-item"><strong>Version:</strong> Indicates the type of card or version the player has in FUT (FIFA Ultimate Team), such as "Icon Explosive" or "Icon Controlled".</p>
        <p class="list-group-item"><strong>PS:</strong> Presumably the price of the player on the PlayStation network. It appears some values are missing or set to 0, which could indicate unavailability or lack of data.</p>
        <p class="list-group-item"><strong>SKI:</strong> Skill Moves rating, represented by the number of stars (1 to 5), indicating how skilled a player is at performing complex moves.</p>
        <p class="list-group-item"><strong>WF:</strong> Weak Foot rating, also represented by the number of stars (1 to 5), indicating how effective a player is with their non-dominant foot.</p>
        <p class="list-group-item"><strong>WR:</strong> Work Rate, shown as two values (e.g., "H/M") indicating the player's work rate in attack and defense, respectively. "H" stands for High, "M" for Medium, and "L" for Low.</p>
        <p class="list-group-item"><strong>PAC:</strong> Pace, a measure of a player's speed and acceleration.</p>
        <p class="list-group-item"><strong>SHO:</strong> Shooting, indicating a player's ability to score goals.</p>
        <p class="list-group-item"><strong>PAS:</strong> Passing, representing a player's ability to distribute the ball accurately.</p>
        <p class="list-group-item"><strong>DRI:</strong> Dribbling, measuring a player's control over the ball while moving.</p>
        <p class="list-group-item"><strong>DEF:</strong> Defense, indicating a player's defensive skills.</p>
        <p class="list-group-item"><strong>PHY:</strong> Physicality, representing a player's physical strength and stamina.</p>
        <p class="list-group-item"><strong>Body:</strong> Information on the player's body type, height, and weight.</p>
        <p class="list-group-item"><strong>Popularity:</strong> A numeric value possibly indicating the player's popularity or demand within the game.</p>
        <p class="list-group-item"><strong>BS:</strong> Possibly "Base Stats," a cumulative score of basic player attributes.</p>
        <p class="list-group-item"><strong>IGS:</strong> In-Game Stats, a comprehensive total of all the player's attributes within the game.</p>
        <p class="list-group-item"><strong>Club:</strong> The club for which the player's card is issued in FUT.</p>
        <p class="list-group-item"><strong>League:</strong> The league to which the player's club belongs in the context of FUT.</p>
        <p class="list-group-item"><strong>Country:</strong> The nationality of the player.</p>
    </div>
</div>
@endsection
