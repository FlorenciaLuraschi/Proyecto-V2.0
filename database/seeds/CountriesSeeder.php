<?php

use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $paises = [
      "AR" => "Argentina",
      "BO" => "Bolivia",
      "BR" => "Brasil",
      "Cl" => "Chile",
      "CO" => "Colombia",
      "CR" => "Costa Rica",
      "CU" => "Cuba",
      "DM" => "Dominica",
      "DO" => "República Dominicana",
      "EC" => "Ecuador",
      "SV" => "El Salvador",
      "GT" => "Guatemala",
      "HO" => "Honduras",
      "MX" => "México",
      "Ni" => "Nicaragua",
      "PA" => "Panamá",
      "PY" => "Paraguay",
      "PE" => "Perú",
      "PR" => "Puerto Rico",
      "UY" => "Uruguay",
      "VE" => "Venezuela",
  ];
  foreach($paises as $iso=>$pais) {
      DB::table('countries')->insert([
      'iso' => $iso,
      'name' => $pais
  ]);
  }
    }
}
