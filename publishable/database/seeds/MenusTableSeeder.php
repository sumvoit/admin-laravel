<?php

use Illuminate\Database\Seeder;
use Sumvo\LaravelAdmin\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Menu::firstOrCreate([
            'name' => 'admin',
        ]);
    }
}
