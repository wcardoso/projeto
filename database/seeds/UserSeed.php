<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Wesley Cardoso";
        $usuario->email = "wcardoso@outlook.com";
        $usuario->password = bcrypt('123456');
        $usuario->save();

    }
}
