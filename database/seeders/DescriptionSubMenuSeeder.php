<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescriptionSubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_menus')->truncate();

        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'High Resolution Border']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Guilloche Pattern']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Rainbow Color']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Void Pantograph / Anticopy']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Latent Image']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Watermark Logo / Image']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'See Through Image']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Relief Design']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Micro Text/Line']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Micro Logo']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Inverse Micro Text']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Spelling Mistake']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Latent Text']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Mirror Text']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Micro Text Logo']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 7,'text' =>'Hidden Image']);

        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Invisible Fluorescent Logo']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Invisible Fluorescent Sign']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Invisible Fluorescent Text']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Thermochromik Ink']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Conductive Ink']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Visible Fluorescent Ink']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Photochromic Ink']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Watermark Ink']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Fugitive Ink']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Holographic Ink']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'InfraRed Invisible Ink']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Taggent Ink']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Coin Reactive Ink']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 8,'text' =>'Solvent Sensitive Ink']);

        DB::table('sub_menus')->insert([ 'menu_id'=> 9,'text' =>'Barcode']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 9,'text' =>'QR Code']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 9,'text' =>'Serial Number']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 9,'text' =>'Variable Data']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 9,'text' =>'Variable Micro Text']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 9,'text' =>'Variable Watermark Text']);

        DB::table('sub_menus')->insert([ 'menu_id'=> 10,'text' =>'Encrypted QR Code']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 10,'text' =>'Dynamic Microline']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 10,'text' =>'Dynamic Hidden Image']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 10,'text' =>'Track and Trace Barcode']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 10,'text' =>'Watermark']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 10,'text' =>'Dynamic Invisible']);

        DB::table('sub_menus')->insert([ 'menu_id'=> 11,'text' =>'Hologram']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 11,'text' =>'Blind Embossing']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 11,'text' =>'Foil Stamping']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 11,'text' =>'Foil Stamping + Blind Embossing']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 11,'text' =>'Lamination']);

        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'Bond']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'Color Center']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'MICR']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'CB']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'CFB']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'CF']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'SC']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'SCCB']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'Thermal']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'Parchment']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'Tear Resistant']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 4,'text' =>'Non-Tearable']);

        DB::table('sub_menus')->insert([ 'menu_id'=> 12,'text' =>'Paper']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 12,'text' =>'Plastic']);

        DB::table('sub_menus')->insert([ 'menu_id'=> 14,'text' =>'Black']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 14,'text' =>'White']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 14,'text' =>'Gray']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 14,'text' =>'Other']);

        DB::table('sub_menus')->insert([ 'menu_id'=> 15,'text' =>'Fanfold']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 15,'text' =>'Cut-sheet']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 15,'text' =>'Roll']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 15,'text' =>'Saddle Sticthing']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 15,'text' =>'Side Stitching']);
        DB::table('sub_menus')->insert([ 'menu_id'=> 15,'text' =>'Pinning']);

    }
}
