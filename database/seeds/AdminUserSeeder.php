<?php

use Illuminate\Database\Seeder;
use App\User;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Youcef KEBIR',
            'email' => 'kebiryoucef07@gmail.com',
            'password' => bcrypt('ramc7659170503'),
        ]);
    }
}
