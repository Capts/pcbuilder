<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ComponentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create('App\Job');
        for ($i=1; $i <= 50; $i++) { 
        	DB::table('components')->insert([
        		'component_type' => $faker->word,
        		'component_name' => $faker->word,
        		'component_desc' => implode($faker->paragraphs(55)),
        		'component_price' =>  $faker->numberBetween($min = 100, $max = 20000),
        		'component_qty' =>  $faker->numberBetween($min = 50, $max = 500),
        		'component_image' =>  '',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now(),
                
	        	
	        	]);
        }
    }
}
