<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->fullName = 'Alan Navia';
        $user->email = 'alan.navia@xcoop.global';
        $user->password = '$2y$12$amo5j.ZzC6PINzynae8/BOENkhf07f7n9JUn4gUOjTXBtuEKqC.kO';
        $user->save();

        $user = new User();
        $user->fullName = 'Nazarena Rueda';
        $user->email = 'nazarena.rueda@xcoop.global';
        $user->password = '$2y$12$7qX01D9HlpOMYfw8AeTM.O8RfmhqUT4APEGqgEuQTn5V1xRwqkQce';
        $user->save();
    }
}
