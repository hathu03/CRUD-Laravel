<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new Category();
        $category->name = "Doi song";
        $category->save();

        $category = new Category();
        $category->name = "Xa hoi";
        $category->save();

        $category = new Category();
        $category->name = "Kinh doang";
        $category->save();

        $category = new Category();
        $category->name = "Phap luat";
        $category->save();
    }
}
