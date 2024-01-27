<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Task::factory(10)->create();
        // DB::table('tasks')->insert([
        //     'title' => str_random(10),
        //     'desc' => str_random(10).'@gmail.com',
        // ]);
    }
}
