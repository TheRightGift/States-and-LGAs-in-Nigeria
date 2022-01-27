<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Goziechukwu\NSAL\Models\Lga;
use Illuminate\Support\Facades\File as FacadesFile;

class LgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lga::truncate();
  
        $json = FacadesFile::get("database/data/lga.json");
        $lgas = json_decode($json);
  
        foreach ($lgas as $key => $value) {
            Lga::create([
                "name" => $value->name,
                "id" => $value->id,
                "state_id" => $value->state_id
            ]);
        }
    }
}