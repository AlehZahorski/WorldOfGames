<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($j = 0; $j < 1; $j++) {
            $games = [];
            for($i = 0; $i < 100; $i++) {
                $games[] = [
                        'title' => $faker->words($faker->numberBetween(1,3), true),
                        'genre_id' => $faker->numberBetween(1, 5),
                        'description' => $faker->text(200),
                        'publisher' => $faker->randomElement(['Atari', 'EA', 'Blizzard', 'Ubisoft', 'Sony']),
                        'score' => $faker->numberBetween(1, 100)
                ];
            }
            DB::table('games')->insert($games);
        }
    }
}
