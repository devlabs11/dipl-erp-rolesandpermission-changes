<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TermsConditionCategorySeeder::class,
            TermsTitleSeeder::class,
            TermValueSeeder::class,
            DescriptionMenuSeeder::class,
            DescriptionSubMenuSeeder::class,
            DescriptionSubMenuItemSeeder::class,
            // CommentSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
