<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'Name', 'Ratings', 'Position', 'Version', 'PS', 'SKI', 'WF', 'WR', 'PAC', 'SHO', 'PAS', 'DRI', 'DEF', 'PHY', 'Body', 'Popularity', 'BS', 'IGS', 'Club', 'League', 'Country',
    ];
    // Other model methods...

    public function favoritedBy() {
        return $this->belongsToMany(User::class);
    }
    
    
}


