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
        $category                 = new Category();
        $category->name           = 'Lacteos';
        $category->description    = 'Incluye Quesos, Leches y demas derivados';
        $category->save();

        $category                 = new Category();
        $category->name           = 'Panaderia';
        $category->description    = 'Incluye Reposteria, Panaderia y demas derivados';
        $category->save();

        $category                 = new Category();
        $category->name           = 'Aseo';
        $category->description    = 'Elementos del aseo y demas derivados';
        $category->save();

        $category                 = new Category();
        $category->name           = 'Electrodmesticos';
        $category->description    = 'Tv,Neveras Y Lavadores';
        $category->save();
        
    }
}
