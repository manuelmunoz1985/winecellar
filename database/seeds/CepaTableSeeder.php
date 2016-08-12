<?php

use Illuminate\Database\Seeder;
use App\Cepa;

class CepaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// clear table
        Cepa::truncate(); 
        // add 1st row
        Cepa::create( [
            'name' => 'Cabernet Sauvingnon' ,
        ] );
        // add 2nd row
        Cepa::create( [
			'name' => 'Carmenere' ,
        ] );

        Cepa::create( [
			'name' => 'Syrah' ,
        ] );

        Cepa::create( [
			'name' => 'Merlot' ,
        ] );

        Cepa::create( [
			'name' => 'Cabernet Franc' ,
        ] );

        Cepa::create( [
			'name' => 'Chardonnay' ,
        ] );

        Cepa::create( [
			'name' => 'Ensamblaje' ,
        ] );

        //
    }
}
