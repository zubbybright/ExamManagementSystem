<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Option;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('options')->insert(
            [
                'question_id' => 1,
                'label' => 'A',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()

            ]
        );

        DB::table('options')->insert(
            [
                'question_id' => 1,
                'label' => 'B',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );

        DB::table('options')->insert(
            [
                'question_id' => 1,
                'label' => 'c',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );
        DB::table('options')->insert(
            [
                'question_id' => 1,
                'label' => 'D',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );
        DB::table('options')->insert(
            [
                'question_id' => 2,
                'label' => 'A',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()

            ]
        );

        DB::table('options')->insert(
            [
                'question_id' => 2,
                'label' => 'B',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );

        DB::table('options')->insert(
            [
                'question_id' => 2,
                'label' => 'c',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );
        DB::table('options')->insert(
            [
                'question_id' => 2,
                'label' => 'D',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );
        DB::table('options')->insert(
            [
                'question_id' => 3,
                'label' => 'A',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()

            ]
        );

        DB::table('options')->insert(
            [
                'question_id' => 3,
                'label' => 'B',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );

        DB::table('options')->insert(
            [
                'question_id' => 3,
                'label' => 'c',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );
        DB::table('options')->insert(
            [
                'question_id' => 3,
                'label' => 'D',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );
    }
}
