<?php

use Illuminate\Database\Seeder;
use App\Cinema;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cinema = new Cinema();
        $cinema->name = 'LandMark';
        $cinema->save();

        $cinema = new Cinema();
        $cinema->name = 'Ha Dong';
        $cinema->save();

        $cinema = new Cinema();
        $cinema->name = 'Long Bien';
        $cinema->save();
    }
}
