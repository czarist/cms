<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addUsers();
    }

    /**
     * Add user
     */
    public function addUsers(): void
    {
        DB::table('users')->delete();
        \App\Models\User::create(['email' => 'admin@admin.com', 'password' => '123456']);
    }
}
