<?php

use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->truncate();
        $works = 
        [
            [
                'slug' => 'test',
                'name' => 'test_work',
                'period' => '20xx/oo~',
                'description' => 'This is test work, so this is not exist.',
                'technique' => 'Larabel',
                'url' => 'idididid',
            ]
        ];
        foreach($works as $work){
            \App\Works::create($work);
        }
    }
}
