<?php

use Illuminate\Database\Seeder;
use App\Models\Administrative;

class AdministrativesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Administrative::class)->times(10)->create();
    }
}
