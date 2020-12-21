<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$units = config('units');
		if (!empty($units)) {
			 foreach ($units as $unit) {
				  $createUnits[] = ['name' => $unit];
				  
			 }

			 DB::table('units')->insert($createUnits);
		}
    }
}