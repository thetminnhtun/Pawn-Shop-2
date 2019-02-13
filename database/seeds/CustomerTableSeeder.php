<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 21; $i++) { 
            $invoice = new App\Customer();
            $invoice->category = $faker->sentence;
            $invoice->w_kyat = rand(1, 5);
            $invoice->w_pae = rand(1, 15);
            $invoice->w_ywae = rand(1, 7);
            $invoice->loan = rand(100000, 500000);
            $invoice->name = $faker->name;
            $invoice->address = $faker->address;
            $invoice->user_id = 1;
            $invoice->save();
        }
    }
}
