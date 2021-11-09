<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrip = new Trip();
        $newTrip->code="";
        $newTrip->destination="";
        $newTrip->address="";
        $newTrip->type_of_accommodation="";
        $newTrip->level="";
        $newTrip->rooms="";
        $newTrip->descriptions="";
        $newTrip->arrival_day="";
        $newTrip->departure_day="";
        $newTrip->price="";

    }
}
