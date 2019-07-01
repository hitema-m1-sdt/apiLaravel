<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            array(
                'name' => 'M7'
            ),
            array(
                'name' => 'M9'
            ),
            array(
                'name' => 'M11'
            ),
            array(
                'name' => 'M13'
            ),
            array(
                'name' => 'M15'
            ),
            array(
                'name' => 'M17'
            ),
            array(
                'name' => 'M20'
            ),
            array(
                'name' => 'Senior'
            ),
        ]);

    }
}
