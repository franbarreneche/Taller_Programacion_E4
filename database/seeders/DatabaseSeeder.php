<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Receta;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    function random_sentence($largo) {
        $aRet = "";
        for($i=0;$i<$largo;$i++){
            $aRet = $aRet.$this->readable_random_string()." ";
        }
        return $aRet;
    }


    /**
     * Generates human-readable string.
     *
     * @param string $length Desired length of random string.
     * 
     * retuen string Random string.
     */
    function readable_random_string($length = 6)
    {
        $string = '';
        $vowels = array("a", "e", "i", "o", "u");
        $consonants = array(
            'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm',
            'n', 'p', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'
        );

        $max = $length / 2;
        for ($i = 1; $i <= $max; $i++) {
            $string .= $consonants[rand(0, 19)];
            $string .= $vowels[rand(0, 4)];
        }

        return $string;
    }


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('recetas')->delete();
        for ($i = 0; $i < 20; $i++) {
            Receta::create([
                "id" => $i,
                "nombre" => $this->random_sentence(3),
                "procedimiento" => $this->random_sentence(30),
                "costo_promedio" => rand(50,500),
                "creador" => "francisco",
                "fecha_creacion" => "2020"."-".rand(1,12)."-".rand(1,30)
            ]);
        }
    }

    
}
