<?php

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
        $this->call(EntrySeeder::class);
        $this->call(FieldSeeder::class);
        $this->call(FormSeeder::class);
    }
}
