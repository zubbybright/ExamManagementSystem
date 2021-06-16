<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     /**
     * Run the database seeds.
     *
     * @return void
     */
        //
        DB::table('questions')->insert(
            [
                'category_id' => 1,
                'title' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()

            ]
        );

        DB::table('questions')->insert(
            [
                'category_id' => 2,
                'title' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );

        DB::table('questions')->insert(
            [
                'category_id' => 3,
                'title' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );
    }
}
