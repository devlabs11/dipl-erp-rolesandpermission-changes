<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermsConditionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms_condition_categories')->truncate();
        
        DB::table('terms_condition_categories')->insert([
            'name' => 'Regular'
        ]);
        DB::table('terms_condition_categories')->insert([
            'name' => 'Export'
        ]);
        DB::table('terms_condition_categories')->insert([
            'name' => 'Local'
        ]);
        DB::table('terms_condition_categories')->insert([
            'name' => 'CPS ---AMC'
        ]);
    }
}
