<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermsTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms_titles')->truncate();

        DB::table('terms_titles')->insert([
            'categories_id' => '1',
            'name' => 'Payment Term'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '1',
            'name' => 'Validity Of Quotation'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '1',
            'name' => 'Documents'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '1',
            'name' => 'Jurisdiction'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '1',
            'name' => 'Tax'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '1',
            'name' => 'Freight'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '1',
            'name' => 'Delivery'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '1',
            'name' => 'Prices'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '1',
            'name' => 'Sampling Charges'
        ]);

        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Port of loading'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Installation Charge'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Warranty'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Training'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Sampling Charges'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'LC handling Charges'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Cancellation Of Order Charge'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Delivery Terms'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Packing'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Payment Term'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Validity Of Quotation'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Documents'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Jurisdlction'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Statutory Clause'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '2',
            'name' => 'Delivery Terms'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Discharge Point Term'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Installation Charge'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Warranty'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Training'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Cancellation Of Order Charge'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Packing'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Payment Term'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Validity Of Quotation'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Documents'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Jurisdlction'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Statutory Clause'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Tax'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Delivery'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'Other Charges'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '3',
            'name' => 'GST certificate '
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Installation Charge'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Warranty'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Training'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Cancellation Of Order Charge'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Payment Term'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Validity Of Quotation'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Documents'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Jurisdlction'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Statutory Clause'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Tax'
        ]);
        DB::table('terms_titles')->insert([
            'categories_id' => '4',
            'name' => 'Travel charges'
        ]);
    }
}
