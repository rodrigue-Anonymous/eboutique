<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
   
    public function run(): void
    {
        DB::table('categories')->insert([
            'name'=> 'Fournitures', 
        
        ]);
        DB::table('categories')->insert([
            'name'=> 'Appareils Electroniques', 
        
        ]);

        DB::table('categories')->insert([
            'name'=> 'Objets tranchants', 
        
        ]);
    }
}
