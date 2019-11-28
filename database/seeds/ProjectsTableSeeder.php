<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hackathons = \App\Hackathon::all();

        foreach ($hackathons as $hackathon) {
            factory(\App\Project::class, 10)->create(['hackathon_id' => $hackathon->id])->each(function ($project) {
                $users = \App\User::all()->random(3)->pluck('id');
                $project->users()->sync($users);
            });
        }

    }
}
