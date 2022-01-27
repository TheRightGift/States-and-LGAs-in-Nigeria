<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Goziechukwu\NSAL\Models\State;
use Illuminate\Support\Facades\File as FacadesFile;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // State::truncate();
  
        $json = FacadesFile::get("database/data/state.json");
        $states = json_decode($json);
  
        foreach ($states as $key => $value) {
            State::create([
                "name" => $value->name,
                "id" => $value->id,
            ]);
        }
    }
}