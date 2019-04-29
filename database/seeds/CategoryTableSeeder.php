<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Rings', 'slug' => 'rings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Necklaces', 'slug' => 'necklaces', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bracelets', 'slug' => 'bracelets', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Earrings', 'slug' => 'earrings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Churies', 'slug' => 'churies', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jewellery Sets', 'slug' => 'jewellery', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
