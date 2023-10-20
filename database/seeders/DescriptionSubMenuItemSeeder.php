<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescriptionSubMenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->truncate();

        DB::table('menu_items')->insert(['sub_menu_id' =>'16', 'text' =>'161+161 LPI']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'16', 'text' =>'75+75 LPI']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'16', 'text' =>'75+100 LPI']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'16', 'text' =>'75 LPI']);

        DB::table('menu_items')->insert(['sub_menu_id' =>'17', 'text' =>'Blue']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'17', 'text' =>'Yellow']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'17', 'text' =>'Green']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'17', 'text' =>'Red']);

        DB::table('menu_items')->insert(['sub_menu_id' =>'18', 'text' =>'Blue']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'18', 'text' =>'Yellow']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'18', 'text' =>'Green']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'18', 'text' =>'Red']);

        DB::table('menu_items')->insert(['sub_menu_id' =>'19', 'text' =>'Blue']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'19', 'text' =>'Yellow']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'19', 'text' =>'Green']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'19', 'text' =>'Red']);

        DB::table('menu_items')->insert(['sub_menu_id' =>'33', 'text' =>'Normal Ink']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'33', 'text' =>'Penetrating Ink']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'33', 'text' =>'Invisible Fluorescent Ink']);

        DB::table('menu_items')->insert(['sub_menu_id' =>'42', 'text' =>'Invisible Data']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'42', 'text' =>'Logo']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'42', 'text' =>'Sign']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'42', 'text' =>'Photo']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'42', 'text' =>'Variable Text']);

        DB::table('menu_items')->insert(['sub_menu_id' =>'43', 'text' =>'Wallpaper']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'43', 'text' =>'Registered']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'43', 'text' =>'2D']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'43', 'text' =>'3D']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'43', 'text' =>'Hot-stamping']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'43', 'text' =>'Label/Sticker']);

        DB::table('menu_items')->insert(['sub_menu_id' =>'45', 'text' =>'Gold']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'45', 'text' =>'Blue']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'45', 'text' =>'Red']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'45', 'text' =>'Green']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'45', 'text' =>'Silver']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'45', 'text' =>'Holographic Color']);

        DB::table('menu_items')->insert(['sub_menu_id' =>'46', 'text' =>'Gold']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'46', 'text' =>'Blue']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'46', 'text' =>'Red']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'46', 'text' =>'Green']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'46', 'text' =>'Silver']);
        DB::table('menu_items')->insert(['sub_menu_id' =>'46', 'text' =>'Holographic Color']);


    }
}
