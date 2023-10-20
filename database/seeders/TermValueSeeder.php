<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms_conditions')->truncate();

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '1',
            'term_value' => '50% advance and bal 50% before dispatch'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '1',
            'term_value' => 'Against Delivery'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '1',
            'term_value' => '30 days from the invoice date'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '1',
            'term_value' => '100 % advance'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '2',
            'term_value' => '30 days from the date of quotes'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '2',
            'term_value' => '60 days from the date of quotes'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '2',
            'term_value' => '90 days from the date of quotes'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '2',
            'term_value' => '15 days from the date of quotes'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '3',
            'term_value' => 'Tax invoice'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '3',
            'term_value' => 'Delivery Challan'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '3',
            'term_value' => 'E-way Bill'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '4',
            'term_value' => 'Mumbai'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '5',
            'term_value' => 'It depends upon HSN code & Prod
            uct
        eg : 18 % / 12 % GST applicable extra'
    ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '6',
            'term_value' => 'As Actual'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '6',
            'term_value' => 'Extra as applicable'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '6',
            'term_value' => 'To pay basis'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '6',
            'term_value' => 'single point location'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '7',
            'term_value' => 'if multi-location delivery charges will be extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '1',
            'title_value_id' => '9',
            'term_value' => 'will be extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'ENTEBEE -Uganda'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'TINCAN Lagos - Nigeria'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'SAVANNA PORT -US'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'NEWARK-US'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'NY - US'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'MOMBASA - Keneya'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'MOJO port - Ethiopia'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'HOUSTON - US'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'ACCRA-GHANA'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'LIBERIA -MONROVIA'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'JEBELALI-UAE'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'LONG BEACH - CALIFORNIA'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'MIAMI -FORIDA'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'TEMPA- US'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'RIAYADH- SAUDI'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'OAKLAND -US'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'KANMANDU-NEPAL'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'NIROBI- KENEYA'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '10',
            'term_value' => 'BANDAR ABBAS-IRAN'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '11',
            'term_value' => 'Extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '12',
            'term_value' => 'one year warranty'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '12',
            'term_value' => 'two year warranty'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '13',
            'term_value' => 'At destination, charges will be extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '14',
            'term_value' => '$ 100 Extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '15',
            'term_value' => 'Extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '16',
            'term_value' => 'Extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '17',
            'term_value' => '1- 5 % charges'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '18',
            'term_value' => 'FOB INDIA'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '18',
            'term_value' => 'CNF BASIS'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '18',
            'term_value' => 'CFR BASIS'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '19',
            'term_value' => 'standard packing'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '20',
            'term_value' => '50% advance and bal 50% before dispatch'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '20',
            'term_value' => 'Against Delivery'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '20',
            'term_value' => '30 days from the invoice date'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '20',
            'term_value' => 'LC at sight'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '20',
            'term_value' => 'LC at 60/90 days sight'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '20',
            'term_value' => '30 % advance and bal. against BL Date'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '20',
            'term_value' => '100 % advance'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '20',
            'term_value' => 'BL 60 days sight'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '21',
            'term_value' => '30 / 60/ 90 days'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '22',
            'term_value' => 'commercial invoice'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '22',
            'term_value' => 'packing list'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '22',
            'term_value' => 'bill of lading -original/telex/seaway BL'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '22',
            'term_value' => 'certificate of origin'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '22',
            'term_value' => 'fumigation certificate'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '22',
            'term_value' => 'product certificate'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '22',
            'term_value' => 'soncap certificate'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '22',
            'term_value' => 'Airway bill'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '22',
            'term_value' => 'lorry recipt'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '22',
            'term_value' => 'POD'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '23',
            'term_value' => 'Mumbai'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '24',
            'term_value' => 'if there is any change in statutory levies will inform customer from the effective date'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '2',
            'title_value_id' => '25',
            'term_value' => '45 days to 60 days'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '26',
            'term_value' => 'single point location'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '26',
            'term_value' => 'if multi-location delivery charges will be extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '27',
            'term_value' => 'Extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '28',
            'term_value' => 'one year warranty'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '29',
            'term_value' => 'two year warranty'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '30',
            'term_value' => 'at location'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '31',
            'term_value' => 'extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '32',
            'term_value' => 'std'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '33',
            'term_value' => '50% advance and bal 50% before dispatch'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '33',
            'term_value' => 'Against Delivery'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '33',
            'term_value' => '30 days from the invoice date'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '33',
            'term_value' => '100 % advance'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '34',
            'term_value' => '30 / 60/ 90 days'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '35',
            'term_value' => 'Tax invoice'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '35',
            'term_value' => 'Delivery Challan'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '35',
            'term_value' => 'E-way Bill'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '36',
            'term_value' => 'mumbai'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '37',
            'term_value' => 'if there is any change in statutory levies will inform customer from the effective date'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '38',
            'term_value' => 'It depends upon HSN code & Product eg : 18 % / 12 % GST applicable extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '38',
            'term_value' => 'single point location'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '38',
            'term_value' => 'if multi-location delivery charges will be extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '3',
            'title_value_id' => '40',
            'term_value' => 'GST certificate mandatory'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '41',
            'term_value' => 'extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '42',
            'term_value' => 'one year warranty'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '43',
            'term_value' => 'two year warranty'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '44',
            'term_value' => 'At destination, charges will be extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '45',
            'term_value' => 'extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '46',
            'term_value' => '50% advance and bal 50% before dispatch'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '46',
            'term_value' => 'Against Delivery'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '46',
            'term_value' => '30 days from the invoice date'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '46',
            'term_value' => '100 % advance'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '47',
            'term_value' => '30 / 60/ 90 days'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '48',
            'term_value' => 'Tax invoice'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '48',
            'term_value' => 'Delivery Challan'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '48',
            'term_value' => 'E-way Bill'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '49',
            'term_value' => 'Mumbai'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '50',
            'term_value' => 'if there is any change in statutory levies will inform customer from the effective date'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '51',
            'term_value' => 'It depends upon HSN code & Product eg : 18 % / 12 % GST applicable extra'
        ]);

        DB::table('terms_conditions')->insert([
            'categories_id' => '4',
            'title_value_id' => '52',
            'term_value' => 'Extra'
        ]);
    }
}
