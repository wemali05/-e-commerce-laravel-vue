<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => "Mixers",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Beer",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Brandy & Cognac",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Champagne",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Gin",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Liquer",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Others",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Rum",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Tequila",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Vodka",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Whisky",
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Wine",
                'created_at' => new DateTime,
                'updated_at' => null,
            ]
        ];
        DB::table('categories')->insert($categories);
    }
}
