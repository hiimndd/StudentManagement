<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class timeseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([

            ['id' => 1,'lesson' => '1','weekdays' => 'Monday'],
            ['id' => 2,'lesson' => '2','weekdays' => 'Monday'],
            ['id' => 3,'lesson' => '3','weekdays' => 'Monday'],
            ['id' => 4,'lesson' => '4','weekdays' => 'Monday'],
            ['id' => 5,'lesson' => '5','weekdays' => 'Monday'],
            ['id' => 6,'lesson' => '6','weekdays' => 'Monday'],
            ['id' => 7,'lesson' => '7','weekdays' => 'Monday'],

            ['id' => 8,'lesson' => '1','weekdays' => 'Tuesday'],
            ['id' => 9,'lesson' => '2','weekdays' => 'Tuesday'],
            ['id' => 10,'lesson' => '3','weekdays' => 'Tuesday'],
            ['id' => 11,'lesson' => '4','weekdays' => 'Tuesday'],
            ['id' => 12,'lesson' => '5','weekdays' => 'Tuesday'],
            ['id' => 13,'lesson' => '6','weekdays' => 'Tuesday'],
            ['id' => 14,'lesson' => '7','weekdays' => 'Tuesday'],

            ['id' => 15,'lesson' => '1','weekdays' => 'Wednesday'],
            ['id' => 16,'lesson' => '2','weekdays' => 'Wednesday'],
            ['id' => 17,'lesson' => '3','weekdays' => 'Wednesday'],
            ['id' => 18,'lesson' => '4','weekdays' => 'Wednesday'],
            ['id' => 19,'lesson' => '5','weekdays' => 'Wednesday'],
            ['id' => 20,'lesson' => '6','weekdays' => 'Wednesday'],
            ['id' => 21,'lesson' => '7','weekdays' => 'Wednesday'],

            ['id' => 22,'lesson' => '1','weekdays' => 'Thursday'],
            ['id' => 23,'lesson' => '2','weekdays' => 'Thursday'],
            ['id' => 24,'lesson' => '3','weekdays' => 'Thursday'],
            ['id' => 25,'lesson' => '4','weekdays' => 'Thursday'],
            ['id' => 26,'lesson' => '5','weekdays' => 'Thursday'],
            ['id' => 27,'lesson' => '6','weekdays' => 'Thursday'],
            ['id' => 28,'lesson' => '7','weekdays' => 'Thursday'],

            ['id' => 29,'lesson' => '1','weekdays' => 'Thursday'],
            ['id' => 30,'lesson' => '2','weekdays' => 'Thursday'],
            ['id' => 31,'lesson' => '3','weekdays' => 'Thursday'],
            ['id' => 32,'lesson' => '4','weekdays' => 'Thursday'],
            ['id' => 33,'lesson' => '5','weekdays' => 'Thursday'],
            ['id' => 34,'lesson' => '6','weekdays' => 'Thursday'],
            ['id' => 35,'lesson' => '7','weekdays' => 'Thursday'],


            ['id' => 36,'lesson' => '1','weekdays' => 'Friday'],
            ['id' => 37,'lesson' => '2','weekdays' => 'Friday'],
            ['id' => 38,'lesson' => '3','weekdays' => 'Friday'],
            ['id' => 39,'lesson' => '4','weekdays' => 'Friday'],
            ['id' => 40,'lesson' => '5','weekdays' => 'Friday'],
            ['id' => 41,'lesson' => '6','weekdays' => 'Friday'],
            ['id' => 42,'lesson' => '7','weekdays' => 'Friday'],

            ['id' => 43,'lesson' => '1','weekdays' => 'Saturday'],
            ['id' => 44,'lesson' => '2','weekdays' => 'Saturday'],
            ['id' => 45,'lesson' => '3','weekdays' => 'Saturday'],
            ['id' => 46,'lesson' => '4','weekdays' => 'Saturday'],
            ['id' => 47,'lesson' => '5','weekdays' => 'Saturday'],
            ['id' => 48,'lesson' => '6','weekdays' => 'Saturday'],
            ['id' => 49,'lesson' => '7','weekdays' => 'Saturday'],
            
            
        ]);
    }
}
