<?php

use App\ComponentType;
use Illuminate\Database\Seeder;

class ComponentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $case = new ComponentType();
        $case->component_name = "case";
        $case->save();

        $power_supply = new ComponentType();
        $power_supply->component_name = "power supply";
        $power_supply->save();

        $motherboard = new ComponentType();
        $motherboard->component_name = "motherboard";
        $motherboard->save();

        $processor = new ComponentType();
        $processor->component_name = "processor";
        $processor->save();

        $heatsink = new ComponentType();
        $heatsink->component_name = "heatsink";
        $heatsink->save();

        $memory = new ComponentType();
        $memory->component_name = "memory";
        $memory->save();

        $hard_drive = new ComponentType();
        $hard_drive->component_name = "hard drive";
        $hard_drive->save();

        $rom = new ComponentType();
        $rom->component_name = "dvd/cd rom";
        $rom->save();

        $graphics = new ComponentType();
        $graphics->component_name = "graphics";
        $graphics->save();
    }
}
