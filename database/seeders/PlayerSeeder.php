<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    public function run()
    {
        Player::create([
            'Name' => 'Andrew Bruce', // Include "Free Agent" in the name or handle it in the view
            'Ratings' => 70,
            'Position' => 'LW',
            'Version' => 'Gold',
            'PS' => 'N/A',
            'SKI' => 3,
            'WF' => 2,
            'WR' => 'H/M',
            'PAC' => 82,
            'SHO' => 68,
            'PAS' => 70,
            'DRI' => 85,
            'DEF' => 59,
            'PHY' => 65,
            'Body' => '170cm | 5\'6" Unique (64kg)',
            'Popularity' => 1000,
            'BS' => 434,
            'IGS' => 1300,          
            'Club' => 'Free Agent',
            'League' => 'None',
            'Country' => 'England',
            'is_free_agent' => true,
        ]);
    }
}

