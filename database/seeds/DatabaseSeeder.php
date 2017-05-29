<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {//Habilitar classe pra criar usuário.
        $this->call(UserSeed::class);
    	$this->call(FolhasSeeds::class);
    }
}
