<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Custom Import
use Faker\Factory as Faker;
use App\Models\for_inventory\products_table as PT;
use Database\Factories\SkuProvider as SKU_GEN;

class products_table_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $faker->addProvider(new SKU_GEN($faker));

        //Database Random Seed Data
        $numberOfData = 20;
        $randomDataComputers = ['keyboard', 'mouse', 'monitor', 'UPS', 'system_unit','router','others'];
        $randomDepartment = ['Backend Programmer Dept', 'Human Resource Dept', 'Marketing Dept', 'IT Support Dept', 'Utility Dept'];

        for ($i = 0; $i < $numberOfData; $i++) {
            PT::create([
                //Need Info
                'Model_Name' => $faker->company,
                'Category' => $faker->randomElement($randomDataComputers),
                'Department_assigned_item_location' => $faker->randomElement($randomDepartment),
                'expected_quantity' => $faker->numberBetween(1, 50),
                'actual_quantity' => $faker->numberBetween(1, 50),
                'Date_Arrived_Listed_Date' => $faker->date,
                'Date_Checked' => $faker->date,
                'SKU_Serial_Number' => $faker->unique()->sku(), // Generate unique SKU for each entry

                //Auto Generate, Later for Testing
                'Model_code' => null,
            ]);
        }
    }
}
