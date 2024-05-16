<?php

namespace App\Listeners;

use App\Events\SeriesCreated as EventsSeriesCreated;
use App\Mail\SeriesCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EmailUsersAboutSeriesCreated implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(EventsSeriesCreated $event): void
    {
        $users = User::get();

        foreach ($users as $index => $user) {
            $email = new SeriesCreated(
                $event->seriesName,
                $event->seriesId,
                $event->seasonsQty,
                $event->episodesPerSeason
            );
            $when = now()->addSeconds($index * 5);
            Mail::to($user)->later($when, $email);
        }
    }
}
