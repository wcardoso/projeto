<?php

use Illuminate\Database\Seeder;
use App\Folha;

class FolhasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
    	$exist = Folha::where('tipo','=','sobre')->count();
    }
}
