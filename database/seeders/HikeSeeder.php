<?php

namespace Database\Seeders;

use App\Models\Hike;
use Illuminate\Database\Seeder;

class HikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hike 1
        $hike = new Hike();
        $hike->title = 'Mendips';
        $hike->description = 'Lovely walk amongst the trees';
        $hike->save();

        // Hike 2
        Hike::create([
            'title' => 'Lickey Hills',
            'description' => 'Long, long walk'
        ]);
    }
}
