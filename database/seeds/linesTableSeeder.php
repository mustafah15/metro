<?php

use Illuminate\Database\Seeder;
use App\Line;
class linesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Line::firstOrCreate(['id'=>'1','name'=>'first Line']);
        Line::firstOrCreate(['id'=>'2','name'=>'second Line']);
        Line::firstOrCreate(['id'=>'3','name'=>'third Line']);
    }
}
