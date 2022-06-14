<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;
use App\Home;

class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<50; $i++) {
        $newHome = new Home();

        $newHome->title = $faker->company();
        $newHome->address = $faker->streetAddress();
        $newHome->city = $faker->city();
        $newHome->description = $faker->paragraph(5, true);
        $newHome->price = $faker->randomFloat(2, 20000, 5000000);
        $newHome->square_meters = $faker->numberBetween(0, 1000);
        $newHome->image = $faker->imageUrl(360, 360, 'house', true);

        $newHome->save();
        }
    }
}
