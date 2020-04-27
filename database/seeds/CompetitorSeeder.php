<?php

use Illuminate\Database\Seeder;
use Xoco70\LaravelTournaments\Models\Championship;
use Xoco70\LaravelTournaments\Models\Competitor;

class CompetitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Competitors seeding!');
        $userClass = config('laravel-tournaments.user.model');
        $championship = Championship::where('tournament_id', 1)->first();

        $users[] = factory($userClass)->create(['name' => 't1']);
        $users[] = factory($userClass)->create(['name' => 't2']);
        $users[] = factory($userClass)->create(['name' => 't3']);
        $users[] = factory($userClass)->create(['name' => 't4']);
        $users[] = factory($userClass)->create(['name' => 't5']);

        foreach ($users as $user) {
            factory(Competitor::class)->create([
                'championship_id' => $championship->id,
                'user_id'         => $user->id,
                'confirmed'       => 1,
            ]);
        }
    }
}
