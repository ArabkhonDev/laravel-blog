<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tags = [
            ['name'=> 'Design'],
            ['name'=> 'Marketing'],
            ['name'=> 'Seo'],
            ['name'=> 'Writing'],
            ['name'=> 'Development'],
            ['name'=> 'Consulting'],
            ['name'=> 'Adminstrator'],
            ['name'=> 'Trading'],
            ['name'=> 'Mobile Grafing'],
            ['name'=> 'Bizness'],
            ['name'=> 'Ambassador'],
            ['name'=> 'Weather'],
            ['name'=> 'Job'],
            ['name'=> 'Health'],
            ['name'=> 'Food'],
            ['name'=> 'Travel'],
            ['name'=> 'Pray'],
            ['name'=> 'Comedy'],
            ['name'=> 'Famous'],
        ];
        Tag::insert($tags);
    }

}
