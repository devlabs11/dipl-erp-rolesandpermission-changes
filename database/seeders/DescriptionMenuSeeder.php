<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescriptionMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('description_masters')->truncate();

        DB::table('description_masters')->insert([ 'text' =>'Basic Description']);
        DB::table('description_masters')->insert([ 'text' =>'Size']);
        DB::table('description_masters')->insert([ 'text' =>'Paper Weight/GSM']);
        DB::table('description_masters')->insert([ 'text' =>'Paper Type']);
        DB::table('description_masters')->insert([ 'text' =>'Front Printing']);
        DB::table('description_masters')->insert([ 'text' =>'Back Printing']);
        DB::table('description_masters')->insert([ 'text' =>'Design Features']);
        DB::table('description_masters')->insert([ 'text' =>'Security Ink Features']);
        DB::table('description_masters')->insert([ 'text' =>'Variable Features']);
        DB::table('description_masters')->insert([ 'text' =>'SeQR Doc Features']);
        DB::table('description_masters')->insert([ 'text' =>'Additional Security Features']);
        DB::table('description_masters')->insert([ 'text' =>'Core Type']);
        DB::table('description_masters')->insert([ 'text' =>'Core ID']);
        DB::table('description_masters')->insert([ 'text' =>'Core Color']);
        DB::table('description_masters')->insert([ 'text' =>'Finishing']);
        DB::table('description_masters')->insert([ 'text' =>'Packing']);
        DB::table('description_masters')->insert([ 'text' =>'Front Cover Page']);
        DB::table('description_masters')->insert([ 'text' =>'Back Cover Page']);
        DB::table('description_masters')->insert([ 'text' =>'1st Part']);
        DB::table('description_masters')->insert([ 'text' =>'2nd Part']);
        DB::table('description_masters')->insert([ 'text' =>'3rd Part']);
    }
}
