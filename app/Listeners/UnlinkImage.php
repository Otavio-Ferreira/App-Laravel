<?php

namespace App\Listeners;

use App\Events\SeriesDestroy as EventSeriesDestroy;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;

class UnlinkImage implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EventSeriesDestroy $event): void
    {
        Storage::delete($event->cover_path);
    }
}
