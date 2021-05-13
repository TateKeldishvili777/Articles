<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use App\Models\User;

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        task::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
    }
}
