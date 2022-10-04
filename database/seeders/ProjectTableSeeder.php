<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProjectTableSeeder extends Seeder
{
    private $_project = [
        ["judul" => "Project 1", "deskripsi" => "Deskripsi seeder 1"],
        ["judul" => "Project 2", "deskripsi" => "Deskripsi seeder 2"],
        ["judul" => "Project 3", "deskripsi" => "Deskripsi seeder 3"],
        ["judul" => "Project 4", "deskripsi" => "Deskripsi seeder 4"],
        ["judul" => "Project 5", "deskripsi" => "Deskripsi seeder 5"],
        ["judul" => "Project 6", "deskripsi" => "Deskripsi seeder 6"],
        ["judul" => "Project 7", "deskripsi" => "Deskripsi seeder 7"],
        ["judul" => "Project 8", "deskripsi" => "Deskripsi seeder 8"],
        ["judul" => "Project 9", "deskripsi" => "Deskripsi seeder 9"],
        ["judul" => "Project 10", "deskripsi" => "Deskripsi seeder 10"]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this->_project as $project){
            $data[] = [
                'judul' => $project['judul'],
                'deskripsi' => $project['deskripsi']
            ];
        }
        DB::table('projects')->insert($data);
    }
}
