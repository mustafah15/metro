<?php

use Illuminate\Database\Seeder;

class ConnectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Generate connections among stations line-wise
         */

        //Get all lines
        $lines = \App\Line::all();
        
        if(!$lines)
            return false;
        
        foreach($lines as $line)
        {
            $this->generateConnectionsForLine($line);
        }

        //Corner Links
        //1. Opera should be linked to Sadat not Nagiub
        $opera = \App\Node::find(44);
        if(!$opera)
            return false;

        $opera->toNodes()->detach(45);
        $opera->toNodes()->attach(19, ['time'=>2]);

        //2. Sadat should be linked to Nagiub
        $sadat = \App\Node::find(19);
        if(!$sadat)
            return false;

        $sadat->toNodes()->attach(45, ['time'=>2]);

        //3. Nagib should be linked to Attaba not Massara
        $nagib = \App\Node::find(45);
        if(!$nagib)
            return false;

        $nagib->toNodes()->detach(46);
        $nagib->toNodes()->attach(53, ['time'=>2]);

        //4. Attaba should be linked to Shohada
        $attaba = \App\Node::find(53);
        if(!$attaba)
            return false;

        $attaba->toNodes()->attach(22, ['time'=>2]);

        //5. Shohada should be linked to Massara
        $shohada = \App\Node::find(22);
        if(!$shohada)
            return false;

        $shohada->toNodes()->attach(46, ['time'=>2]);

        //6. Shubra El-Kheima should not be linked to Attaba
        $shubra = \App\Node::find(52);
        if(!$shubra)
            return false;

        $shubra->toNodes()->detach(53);


        
    }

    /**
     * Attach adjacent statiosn that belongs to a line
     * @param $line
     * @return bool
     */
    protected function generateConnectionsForLine($line)
    {
        //Initialize current and next stations pointers
        $linesStations = $line->nodes()->orderBy('node_id', 'ASC')->get();
        if($linesStations->count() < 2)
        {
            return false;
        }

        // Initialize current station pointer
        $currentStation = $linesStations->shift();
        //Loop through each line station, and attach adjacent stations to each others
        foreach($linesStations as $station)
        {
            /*
             * If both stations are happened to belong to the same line but are not adjacent
             * Do not connect
             */
            $station1Lines =  $currentStation->lines()->pluck('lines.id')->toArray();
            $station2Lines =  $station->lines()->pluck('lines.id')->toArray();
            if(abs($currentStation->id - $station->id) > 1 && !empty(array_intersect($station1Lines, $station2Lines)))
            {
                $currentStation = $station;
                continue;
            }

            $currentStation->toNodes()->attach($station->id, ['time'=>2]);
            //Advance current station pointer
            $currentStation = $station;
        }
    }
}
