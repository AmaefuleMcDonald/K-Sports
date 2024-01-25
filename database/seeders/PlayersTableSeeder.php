<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player; // Import your Player model
use Illuminate\Support\Facades\DB;
use League\Csv\Reader; // If you choose to use the league/csv package

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Empty the players table first if needed
        DB::table('players')->truncate();

        // Load the CSV document from a file path
        $csv = Reader::createFromPath(storage_path('app/Fifa 23 Fut Players.csv'), 'r');
        $csv->setHeaderOffset(0); //set the CSV header offset

        // Get all the records from the CSV
        $records = $csv->getRecords();

        foreach ($csv->getRecords() as $record) {
            Player::create([
                'name' => $record['Name'],
                'ratings' => $record['Ratings'],
                'position' => $record['Position'],
                'version' => $record['Version'],
                'ps' => $record['PS'],
                'ski' => $record['SKI'],
                'wf' => $record['WF'],
                'wr' => $record['WR'],
                'pac' => $record['PAC'],
                'sho' => $record['SHO'],
                'pas' => $record['PAS'],
                'dri' => $record['DRI'],
                'def' => $record['DEF'],
                'phy' => $record['PHY'],
                'body' => $record['Body'],
                'popularity' => $record['Popularity'],
                'bs' => $record['BS'],
                'igs' => is_numeric($record['IGS']) ? $record['IGS'] : null, // Check if 'IGS' is a number
                'club' => $record['Club'],
                'league' => $record['League'],
                'country' => $record['Country']
            ]);
        }
    }
}
