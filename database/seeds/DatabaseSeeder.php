<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(linesTableSeeder::class);
        $this->call(NodesTableSeeder::class);
        $this->call(ConnectionTableSeeder::class);
    }
}
