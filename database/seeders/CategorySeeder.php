<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => 'Technical',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()

            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Aptitude',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Logical',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );
    
    }
}
